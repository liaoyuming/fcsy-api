<?php

use Illuminate\Database\Seeder;

class QuestionOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = [
            [
                'question_id' => '1',
                'content' => '服务他人、因应他人的需求，对我而言是重要的',
                'character_type_id' => '2',
            ],
            [
                'question_id' => '1',
                'content' => '寻求看待事物和做事的各种方法，对我而言是重要的。',
                'character_type_id' => '5',
            ],
            [
                'question_id' => '2',
                'content' => '面对困扰时，我会陷在里面。',
                'character_type_id' => '4',
            ],
            [
                'question_id' => '2',
                'content' => '面对困扰时，我会想办法放轻松。',
                'character_type_id' => '7',
            ],
            [
                'question_id' => '3',
                'content' => '我向来认为自己是个平静的、随和的人。',
                'character_type_id' => '9',
            ],
            [
                'question_id' => '3',
                'content' => '我向来认为自己是个严肃的、自律的人',
                'character_type_id' => '1',
            ],
            [
                'question_id' => '4',
                'content' => '我喜欢社交生活且喜欢结识各样的朋友。',
                'character_type_id' => '3',
            ],
            [
                'question_id' => '4',
                'content' => '我对社交生活不感兴趣，而且怕与人交往。',
                'character_type_id' => '5',
            ],
            [
                'question_id' => '5',
                'content' => '做决定对我而言通常很困难。',
                'character_type_id' => '6',
            ],
            [
                'question_id' => '5',
                'content' => '做决定对我而言很少有困难。',
                'character_type_id' => '8',
            ],
            [
                'question_id' => '6',
                'content' => '我向来是愿意支持他人，为他人付出，喜欢有人为伴的',
                'character_type_id' => '2',
            ],
            [
                'question_id' => '6',
                'content' => '我向来是严肃的、克制的、喜欢讨论问题。',
                'character_type_id' => '1',
            ],
            [
                'question_id' => '7',
                'content' => '面对全新的经验时，我通常会自问这是否精彩、有用。',
                'character_type_id' => '3',
            ],
            [
                'question_id' => '7',
                'content' => '面对全新的经验时，我通常会自问这是否好玩、有趣。',
                'character_type_id' => '7',
            ],
            [
                'question_id' => '8',
                'content' => '我主要的长处之一是主导各种情况的能力。',
                'character_type_id' => '8',
            ],
            [
                'question_id' => '8',
                'content' => '我主要的长处之一是描述内在状态的能力。',
                'character_type_id' => '4',
            ],
            [
                'question_id' => '9',
                'content' => '大体而言，我太开放、天真。',
                'character_type_id' => '9',
            ],
            [
                'question_id' => '9',
                'content' => '大体而言，我太机警、谨慎。',
                'character_type_id' => '6',
            ],
            [
                'question_id' => '10',
                'content' => '我认为做事的方法有很多种的。',
                'character_type_id' => '3',
            ],
            [
                'question_id' => '10',
                'content' => '我认为做事的方法只有一种。',
                'character_type_id' => '1',
            ],
            [
                'question_id' => 11,
                'content' => '我的主要长处之一是利用资源及实现计划。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 11,
                'content' => '我的主要长处之一是提出新点子，使人们为之兴奋。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 12,
                'content' => '我的健康及幸福因我强烈的助人欲而受害。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 12,
                'content' => '我的人际关系因我强烈的自我而受害。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 13,
                'content' => '我向来有不易睡眠的困扰。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 13,
                'content' => '我向来能轻易入睡。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 14,
                'content' => '我一向做事欠缺信心而犹豫不决。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 14,
                'content' => '我一向做事充满信心当机立断。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 15,
                'content' => '人们信赖我，因为我有自信且能够为他们着想。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 15,
                'content' => '人们信赖我，因为我很公正且会做正确的事。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 16,
                'content' => '我通常专注于自己的情感，且喜欢让它一直持续下去。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 16,
                'content' => '我通常会淡化自己的情感，不会太注意它。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 17,
                'content' => '我或许一直都太被动、不够投入。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 17,
                'content' => '我或许一直都有太强的支配欲和操作欲。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 18,
                'content' => '大体而言，我是有条理且审慎的。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 18,
                'content' => '大体而言，我是好刺激且愿意冒险的。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 19,
                'content' => '我倾向帮助别人而发现他们正在犯错。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 19,
                'content' => '我倾向和他人保持一定的距离。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 20,
                'content' => '我已提供许多人关怀与教养。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 20,
                'content' => '我已提供许多人方向与诱因。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 21,
                'content' => '我很以自己的毅力及常识为傲。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 21,
                'content' => '我很以自己的创新、创造力为傲。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 22,
                'content' => '大体而言，我是个外向的、擅社交的人。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 22,
                'content' => '大体而言，我是个认真的、自律的人。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 23,
                'content' => '虽然对方没有提出要求，只要我觉得他们有所需要，我便毫不犹豫及主动地帮助他们。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 23,
                'content' => '若对方没有提出要求，我不会主主动地帮助他们。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 24,
                'content' => '通常能引起剧烈情绪震荡的情况都会吸引我。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 24,
                'content' => '通常令我觉得平静、舒适的情况都会吸引我。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 25,
                'content' => '由于想象力及好奇心，我的想法一向很有冒险性。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 25,
                'content' => '我的想法一向很实际，只尝试着推动事物。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 26,
                'content' => '驾驭及支配别人对我而言是较重要的。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 26,
                'content' => '受到别人的重视及认同对我而言是较重要的。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 27,
                'content' => '面临麻烦时，我有能力将之解决。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 27,
                'content' => '面临麻烦时，我会以自己喜欢的东西慰劳自己。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 28,
                'content' => '整体而言，我一直是凭直觉的、个人主义的。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 28,
                'content' => '整体而言，我一直是非常有组织力的、负责任的。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 29,
                'content' => '我因过于侵扰及干扰别人而产生人际关系的困扰',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 29,
                'content' => '我因过于逃避及沉默而产生人际关系的困扰。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 30,
                'content' => '我向来自信且喜欢与人比较。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 30,
                'content' => '我向来谦卑且喜欢以较慢的步伐行事。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 31,
                'content' => '我喜欢生活在自己的小世界里。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 31,
                'content' => '我喜欢让整个世界知道我的存在。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 32,
                'content' => '我常受紧张、不安全感及疑虑的困扰。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 32,
                'content' => '我常受愤怒、理想主义及缺乏耐心的困扰。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 33,
                'content' => '我向来以自己在别人生活中所扮演的重要角色为傲。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 33,
                'content' => '我向来以自己的风趣及对新事物的开放态度为傲。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 34,
                'content' => '我比较乐观且易于从挫折中恢复。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 34,
                'content' => '我常处于情绪化且多愁善感。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 35,
                'content' => '在许多状况下，我喜欢让自己就领导地位。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 35,
                'content' => '早许多状况下，我宁可让他人就领导地位。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 36,
                'content' => '我一向是专注且具有高度热衷。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 36,
                'content' => '我一向是很自发的，喜好玩乐的。',
                'character_type_id' => 7,
            ],
        ];
        DB::table('question_options')->insert($options);
    }
}
