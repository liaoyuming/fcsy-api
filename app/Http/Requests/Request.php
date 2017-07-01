<?php

namespace App\Http\Requests;

use App\Exceptions\Api\Helper\ErrorType;
use App\Exceptions\Api\ApiErrorException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Dingo\Api\Exception\ValidationHttpException;

class Request extends FormRequest
{
    /**
     * sanitize 函数过滤后的请求数据
     *
     * @var array
     * @link https://laracasts.com/discuss/channels/general-discussion/laravel-5-modify-input-before-validation
     */
    protected $sanitized;


    public function rules()
    {
        return [];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * 默认 sanitize 函数， trim 所有参数
     *
     * @return array
     */
    public function sanitize()
    {
        $this->replace($this->trimData($this->all()));

        return $this->all();
    }

    /**
     * 如果有 sanitize 函数，调用 sanitize 函数，你可以在 sanitize 函数里处理/过滤 request 的数据
     *
     * @return array
     */
    protected function sanitizeInput()
    {
        if (method_exists($this, 'sanitize')) {
            return $this->sanitized = $this->container->call([$this, 'sanitize']);
        } else {
            return $this->all();
        }
    }

    /**
     * Get sanitized input.
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    public function sanitized($key = null, $default = null)
    {
        $input = is_null($this->sanitized) ? $this->all() : $this->sanitized;

        return array_get($input, $key, $default);
    }

    /**
     * Trim the request data.
     *
     * @param  array $data
     * @return array
     */
    protected function trimData($data)
    {
        return array_map(function ($item) {
            if (is_string($item)) {
                return trim($item);
            } else if (is_array($item)) {
                return $this->trimData($item);
            } else {
                return $item;
            }
        }, $data);
    }

    protected function failedValidation(Validator $validator)
    {
        if ($this->container['request'] instanceof Request) {
            throw new ValidationHttpException($validator->errors());
        }

        parent::failedValidation($validator);
    }
}
