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
                'content' => '服务他人、因应他人的需求，对我而言是重要的。',
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
                'content' => '我向来是愿意支持他人，为他人付出，喜欢有人为伴的。',
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
                'content' => '我因过于侵扰及干扰别人而产生人际关系的困扰。',
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

        $options2 = [
            [
                'question_id' => 1,
                'content' => '我勇于面对争拗。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 1,
                'content' => '我喜欢避开争拗。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 2,
                'content' => '我认为自己是一个有领导能力,仪表出众和有野心的人',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 2,
                'content' => '我认为自己是一个抱有坚定立场,并希望别人依我的方法做事的人',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 3,
                'content' => '我经常都专注于我的工作里。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 3,
                'content' => '我经常都不自觉地沉醉于开心和好玩的事情里。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 4,
                'content' => '我经常会结识到新朋友并善于善待他们。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 4,
                'content' => '我喜欢活在自己的感觉世界里,并不在乎有没有朋友与我在一起。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 5,
                'content' => '我渴望身边的朋友都重视我,认同我,并经常在我身边。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 5,
                'content' => '我渴望我的朋友都和我有些距离,我很重视我的私人空间,不喜欢受到骚扰。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 6,
                'content' => '当我要学习新事物时,我会优先考虑它对我是否有用。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 6,
                'content' => '当我要学习新事物时,我会优先考虑它是否有趣,会不会带给我新刺激。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 7,
                'content' => '我的专注力往往会在自己身上，对于自己的感觉很敏感。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 7,
                'content' => '我的专注力往往会在他人身上，对于别人的感觉很敏感。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 8,
                'content' => '别人器重我对事物的独到眼光和专业知识。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 8,
                'content' => '别人器重我的决断能力和个人威信。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 9,
                'content' => '我处事喜欢"以人为本"多于"以目标为本"。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 9,
                'content' => '我处事喜欢"以目标为本"多于"以人为本"。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 10,
                'content' => '通常,我都可以为了工作而把感情抽离。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 10,
                'content' => '通常,我都会在作出决定前先考虑自己的感受。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 11,
                'content' => '我办事通常都会循规蹈矩,小心翼翼。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 11,
                'content' => '我办事通常都会勇于尝试,富有冒险精神。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 12,
                'content' => '我乐善好施,喜欢帮助别人,并享受与朋友共聚一起的时光。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 12,
                'content' => '我做事认真而负责,喜欢与人讨论问题,会去了解他人的立场和观点,但对于别人的想法,我会有所保留。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 13,
                'content' => '我经常渴望比别人获得更多权力。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 13,
                'content' => '我经常渴望比别人表现得更出色。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 14,
                'content' => '为了显示我独特的判断力和眼光,我喜欢提出一些尖锐的问题去证明我拥有独到的见解和观察力。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 14,
                'content' => '为了在群体里保持和谐的关系,我喜欢抱持沉默的态度与平常的心境。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 15,
                'content' => '我经常担心我未能尽力办好要做的事或者错过了一些更好的机会。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 15,
                'content' => '我经常担心如果我软弱就会被人占便宜。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 16,
                'content' => '我冷淡和我行我素的态度会使人厌烦。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 16,
                'content' => '我不客气地吩咐人做事的态度会使人厌烦。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 17,
                'content' => '我会信任我的朋友,因为他们知道我是一个值得信赖的人。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 17,
                'content' => '我不喜欢依赖别人,凡事亲力亲为，去将事情办妥。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 18,
                'content' => '我倾向于将感情抽离,又沉醉于思考里,不喜欢受骚扰。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 18,
                'content' => '我倾向重视感情,有时会变得情绪化和我行我素,不理睬别人。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 19,
                'content' => '我喜欢挑战别人,有时会对他们"当头捧喝",直斥其非。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 19,
                'content' => '我喜欢令别人感到舒服和被照顾,有时会听他们申诉,并使他们冷静下来。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 20,
                'content' => '我是一个外向,好动,醒目,社交力强的人。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 20,
                'content' => '我是一个做事认真,诚实,正直,讲效率,有规律的人。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 21,
                'content' => '要在众人面前表现自己的能力会使我怯场和不习惯。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 21,
                'content' => '要在众人面前表现自己的能力正是我的心愿。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 22,
                'content' => '专注于追寻自己的理想和兴趣,比起安逸的生活更重要。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 22,
                'content' => '我较重视拥有安逸和悠闲的生活,多于我去实现理想。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 23,
                'content' => '每当和别人有冲突之时,我会我行我素,抱持自己的立场不屑与他们争执。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 23,
                'content' => '每当和别人有冲突之时,我会遇强愈强,不怕被击倒,亦绝不会退避。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 24,
                'content' => '我喜欢加入群体里,亦会随遇而安地跟着大队走。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 24,
                'content' => '我不喜欢他人牵我鼻子走,亦会对身边的人有所要求。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 25,
                'content' => '我最受欢迎的地方是我拥有充沛的活力,爽朗的性格和我的幽默感。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 25,
                'content' => '我最受欢迎的地方是我拥有持久的耐力,亲切友善的态度和乐于助人的心。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 26,
                'content' => '我的成功是基于我拥有良好的人际关系,并时常给人留下好印象。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 26,
                'content' => '除了人际关系,其他的事情我都处理得很好,在很多方面都算得上是个成功之人。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 27,
                'content' => '我会为自己敏锐的观察力,拥有不屈不挠的毅力和坚定不移的信念而自豪。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 27,
                'content' => '我会为自己的感受力,拥有艺术细胞和无穷的创作力而感到自豪。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 28,
                'content' => '基本上,我是一个随和豁达,头脑开通的人。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 28,
                'content' => '基本上,我是一个有自信,目标确定,并差遣自己和别人朝既定目标迈进的人。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 29,
                'content' => '我会努力使人认同我和接受我,并赞赏我的成就。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 29,
                'content' => '使人认同和接受并非我的最重要事项,我更重视做人要有的原则。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 30,
                'content' => '受到别人施压时,我会有所保留,不表态。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 30,
                'content' => '受到别人施压时,我会变得积极,看情况而做决定。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 31,
                'content' => '别人喜欢我是因为我和蔼亲善,外向和乐于助人。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 31,
                'content' => '别人喜欢我是因为我个性独特,不平凡,有深度。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 32,
                'content' => '我是一个富有责任感和重视承诺的人。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 32,
                'content' => '我是一个重视他人接受我和可以维持融洽关系的人。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 33,
                'content' => '别人会基于我伟大的信念和承诺所推动,而努力工作。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 33,
                'content' => '别人会基于我指出他们要承担的后果,而驱使他们努力工作。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 34,
                'content' => '去处理繁琐和细节的任务并非我的强项。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 34,
                'content' => '我善于在同一时间内处理多项任务,这是我喜欢的方式,亦是人们赏识我的地方。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 35,
                'content' => '在事情变得白热化和人们都一窝蜂的去干时,我会在一旁,观察事态的发展。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 35,
                'content' => '在事情变得白热化和人们都一窝蜂的去干时,我会喜欢站出来主持大局。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 36,
                'content' => '若然我的朋友犯了过错,我会基于同情心与朋友站在同一阵线。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 36,
                'content' => '我绝不会因为犯错的是我朋友而苟且认同,我认为应秉公办理。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 37,
                'content' => '我悲观和负面的态度有时会令身边的人觉得厌烦。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 37,
                'content' => '我强出头和喜欢作主的态度有时会令身边的人觉得厌烦。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 38,
                'content' => '我做事小心谨慎,经常会未雨绸缪,作出最坏的打算,准备好应付危机。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 38,
                'content' => '我做事喜欢顺其自然,以乐观积极的态度,随机应变。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 39,
                'content' => '坦白来说,我是一个占有欲很强的人,在感情方面,我绝不容许他人横刀夺爱或"一脚踏两船"。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 39,
                'content' => '坦白来说,我并不相信天长地久,海枯石烂的爱情,我反而会经常去试探我的伴侣是否仍是真心的爱着我。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 40,
                'content' => '我经常提醒自己要努力上进,事事要做到最好,不可以自满。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 40,
                'content' => '我有时会情绪化,感情用事,经常会变得任性或我行我素。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 41,
                'content' => '我有时会沉醉于我的感情,难舍难离,或长时间陶醉在某一段感情的回忆里,不能忘怀。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 41,
                'content' => '我会刻意逃避情感的束缚,亦甚少去关注自己或他人内心世界的感受,我觉得花时间在这些地方是不切实际的。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 42,
                'content' => '我有时会发觉对人有点过分的关怀,相比之下,很多时我反而会忽略了自己。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 42,
                'content' => '我有时发觉自己的立场总是不够坚定,很多时候过分迁就朋友。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 43,
                'content' => '我觉得自己是个头脑灵活,变通多,计谋多,贪新鲜和精力充沛的人。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 43,
                'content' => '我觉得自己是个有爱心,慷慨,又能主动关心别人需要和感受的人。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 44,
                'content' => '我凡事都会先做最坏的打算,有了心理准备始能安心。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 44,
                'content' => '我凡事都会顺其自然,反正迟早都会发生,既来之,则安之;我认为毋须自寻烦恼。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 45,
                'content' => '我是个"捕风汉子",行踪飘忽,难以捉摸,无论在感情或事业上,我都喜欢拥有不同的选择,未到最后关头,不会作出决定。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 45,
                'content' => '我是个安静而踏实的人,感情和事业都专一,喜欢随遇而安,情怀恰似细水长流。',
                'character_type_id' => 9,
            ],
        ];



        $options3 = [
            [
                'question_id' => 1,
                'content' => '我内心浪漫而且喜欢幻想。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 1,
                'content' => '我是一个实际且比较现实的人。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 2,
                'content' => '我愿意迎接冲突。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 2,
                'content' => '我喜欢逃避冲突。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 3,
                'content' => '我通常老练、有魅力、积极。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 3,
                'content' => '我通常比较直接、刻板且喜欢胡思乱想。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 4,
                'content' => '我对事情会比较集中，容易紧张。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 4,
                'content' => '我喜欢放松和幽默。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 5,
                'content' => '我对人很友善且善于帮助他人。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 5,
                'content' => '我喜欢独处，不喜欢和人相处。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 6,
                'content' => '我很难放松并停止思考潜在的问题。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 6,
                'content' => '潜在的问题不会影响我的工作。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 7,
                'content' => '我有很强的生存意识。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 7,
                'content' => '我追求高尚和理想主义。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 8,
                'content' => '我希望给别人关爱。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 8,
                'content' => '我常常和人保持一定距离，不喜欢太近。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 9,
                'content' => '对于新任务，我更加看重它是否有用。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 9,
                'content' => '对于新任务，我更加看重它是否有意思。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 10,
                'content' => '我倾向于关注我自己。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 10,
                'content' => '我倾向于关注他人。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 11,
                'content' => '别人依赖于我的见识与知识。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 11,
                'content' => '别人依赖于我的力量与决策。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 12,
                'content' => '我给人的印象是十分不自信。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 12,
                'content' => '我给人的印象是十分自信。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 13,
                'content' => '我更加注重关系。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 13,
                'content' => '我更加注重目的。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 14,
                'content' => '我不能大胆地表白我自己。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 14,
                'content' => '我能大胆地说出别人想说但不敢说的话。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 15,
                'content' => '对于我来说，决定只做某一件明确的事情而不比较其他可能的选择是困难的。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 15,
                'content' => '放松更具灵活性对我来说是很困难的。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 16,
                'content' => '我倾向于犹豫与拖延。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 16,
                'content' => '我倾向于大胆与果断。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 17,
                'content' => '我不愿意别人给我带来麻烦。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 17,
                'content' => '我希望别人依赖我，  让我帮忙解决麻烦。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 18,
                'content' => '通常我会为了完成工作将感情置于一边。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 18,
                'content' => '通常我会在我做事情之前需要克服我的感情。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 19,
                'content' => '一般来说，我是讲求方法并且很谨慎。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 19,
                'content' => '一般来说，我是敢于冒险。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 20,
                'content' => '我乐意成为帮助别人、给予别人关心的人，喜欢和人相处。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 20,
                'content' => '我喜欢严肃、沉默，研究问题。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 21,
                'content' => '我常常觉得自己需要成为顶梁柱。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 21,
                'content' => '我常常感到自己需要做得十全十美。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 22,
                'content' => '我主要感兴趣于问难题并拥有独立观点。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 22,
                'content' => '我常常尽量保持内心的稳定与平静。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 23,
                'content' => '我比较顽固并持有怀疑的态度。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 23,
                'content' => '我太软心肠并多愁善感。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 24,
                'content' => '我害怕得不到好的事物。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 24,
                'content' => '我害怕如果我不提高警惕就会被欺骗。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 25,
                'content' => '我习惯于表现得很冷淡而使别人生气。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 25,
                'content' => '我习惯于指使别人做事而使他们生气。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 26,
                'content' => '我会因为受到一些刺激的或者鼓舞的事的影响而使内心比较紧张。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 26,
                'content' => '我会因为没有受到一些刺激的或者鼓舞的事而内心比较紧张。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 27,
                'content' => '我喜欢得到朋友的支持，而且希望他们也能得到我的支持。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 27,
                'content' => '我比喜欢去指望别人的支持，更喜欢一个人做事。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 28,
                'content' => '我倾向于独立与专心。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 28,
                'content' => '我倾向于情绪化并热衷于我自己的看法。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 29,
                'content' => '我喜欢挑战别人，让别人都精神振奋。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 29,
                'content' => '我喜欢去安抚别人的情绪，让他们稳定下来。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 30,
                'content' => '我总的来说是个开朗的并喜欢交际的人。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 30,
                'content' => '我总的来说是个认真的并很能自律的人。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 31,
                'content' => '我希望去迎合到他人－我不喜欢和他人的距离较远的状态。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 31,
                'content' => '我希望独树一帜－我不喜欢别人和我没有区别的状态。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 32,
                'content' => '对我来说，追求个人的兴趣比舒适与安全更重要。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 32,
                'content' => '对我来说，追求个人的舒适和安全感比个人的兴趣更重要。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 33,
                'content' => '当和别人发生冲突的时候，我会踟蹰不前。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 33,
                'content' => '当和别人发生冲突的时候，我不会去让步来缓和气氛的。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 34,
                'content' => '我不够坚定，容易屈服，并听从别人的指使。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 34,
                'content' => '我不对别人作出让步，并对他们下达指令。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 35,
                'content' => '我喜欢我自己始终保持愉悦和亢奋的精神状态。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 35,
                'content' => '我喜欢自己内心的友善和热情。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 36,
                'content' => '我希望能够给别人留下最好的印象。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 36,
                'content' => '我并不在乎给别人留下什么印象。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 37,
                'content' => '我相信我的刚毅和第六感。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 37,
                'content' => '我相信我的想象力和偶然的灵感。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 38,
                'content' => '我比较平和讨人喜欢',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 38,
                'content' => '我精神十足，非常自信。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 39,
                'content' => '我工作很努力以求得到别人的接受与喜欢。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 39,
                'content' => '得到别人的接受与喜欢对我来说并不重要。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 40,
                'content' => '当别人给我压力时我变得更加退缩。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 40,
                'content' => '当别人给我压力时我回变得更加自信。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 41,
                'content' => '人们对我感兴趣是因为我很开朗、有吸引力、有趣。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 41,
                'content' => '人们对我感兴趣是因为我独立、与众不同、深刻。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 42,
                'content' => '责任和使命对我很重要。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 42,
                'content' => '和谐和支持对我很重要。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 43,
                'content' => '我制定出重要的计划并作出承诺，以此来鼓励人们。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 43,
                'content' => '我会指出不按照我的建议做所产生的后果，以此来鼓励人们。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 44,
                'content' => '我很少表露出情绪。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 44,
                'content' => '我经常表露出情绪。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 45,
                'content' => '我不擅长于处理琐屑的事。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 45,
                'content' => '我擅长于处理琐屑的事。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 46,
                'content' => '我往往会表明我和其他大部分人的不同的地方，特别是和我的家庭不同。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 46,
                'content' => '我往往会表明我和其他大部分人相同的地方，特别是和我的家庭相同。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 47,
                'content' => '当场面变得热闹起来时，我倾向于站在一旁。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 47,
                'content' => '当场面变得热闹起来时，我倾向于加入其中。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 48,
                'content' => '就算朋友是错的，我也会支持他们。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 48,
                'content' => '如果事情错了，就算是我的朋友我也不会让步。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 49,
                'content' => '我是一个热心的支持者。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 49,
                'content' => '我是一个积极的老练的人。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 50,
                'content' => '当遇到困难时我倾向于夸大我的问题。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 50,
                'content' => '当遇到困难时我倾向于转移注意力。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 51,
                'content' => '总的来说，我很确信知道情况应该如何。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 51,
                'content' => '总的来说，我对情况持怀疑的态度。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 52,
                'content' => '由于我的不乐观、抱怨，常常给人带来不必要的麻烦。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 52,
                'content' => '由于我的苛刻、控制，常常给人带来不必要的麻烦。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 53,
                'content' => '我常常遵从内心的感觉来处理事情，并随波逐流。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 53,
                'content' => '我常常不按照内心的真实感觉来处理事情，因为这样会产生不必要的麻烦。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 54,
                'content' => '通常我成为注意的焦点时，会很自然。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 54,
                'content' => '通常我成为注意的焦点时，会很不习惯。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 55,
                'content' => '我做事情很谨慎，努力为意料之外的事情做准备。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 55,
                'content' => '我做事情凭一时冲动，只是在问题出现的时候才看怎么办。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 56,
                'content' => '我会因为别人不喜欢我为他们做的事情而不高兴。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 56,
                'content' => '我会因为别人不听我的而不高兴。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 57,
                'content' => '独立、坚强、自立更生对我很重要  。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 57,
                'content' => '有价值、得到别人的称赞对我来说很重要。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 58,
                'content' => '当和朋友产生矛盾的时候我喜欢坚持自己的意见和观点。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 58,
                'content' => '当与朋友产生矛盾的时候我倾向于顺其自然以免伤了和气。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 59,
                'content' => '我常常占有所爱的人——我不能放任他们  。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 59,
                'content' => '我常常“考察”所爱的人，想确定他们是否爱我。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 60,
                'content' => '组织资源并促使某些事情的发生是我的优势之一。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 60,
                'content' => '提出新观点并同时振奋人心，这是我的优势之一。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 61,
                'content' => '我要在别人的驱策下才会做事，不能依赖自己。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 61,
                'content' => '我过于情绪化，不能自律 。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 62,
                'content' => '我尝试着让生活快节奏、紧张刺激并充满兴奋的感觉。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 62,
                'content' => '我尝试着让生活有条不紊、从容安稳、宁静。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 63,
                'content' => '就算我已经有所成功，我仍然会怀疑自己的能力。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 63,
                'content' => '就算我遇到了挫折，我仍然会相信自己的能力。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 64,
                'content' => '通常我喜欢深入探索自己的情感世界，且希望能够持久保持情感。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 64,
                'content' => '通常我喜欢忽略自己的情感世界，且不太在意情感。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 65,
                'content' => '我会留意很多人并刻意培养他们。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 65,
                'content' => '我带领许多人并鼓舞他们的士气  。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 66,
                'content' => '我对自己要求有点严格 。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 66,
                'content' => '我对自己有点宽容 。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 67,
                'content' => '我可能比较果断坚决，并追求不断进步和卓越  。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 67,
                'content' => '我很谦虚，喜欢根据自己的步伐来慢条斯理做事。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 68,
                'content' => '我以自己的清晰的思路和明确的目的性为骄傲。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 68,
                'content' => '我以自己的可靠信赖和实事求是为骄傲。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 69,
                'content' => '我喜欢经常反省自己——我认为去明白我的感受和心情非常重要。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 69,
                'content' => '我花大量的时间反思——我认为把事情做完非常重要。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 70,
                'content' => '我觉得我是一个乐观的平和的人。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 70,
                'content' => '我是一个严谨的、有要求的人。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 71,
                'content' => '我头脑灵活，精力充沛 。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 71,
                'content' => '我有一颗赤热的心，具有奉献精神。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 72,
                'content' => '我所做的事情要有极大的可能性得到奖励与赏识。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 72,
                'content' => '只要让我做我有兴趣的事情，我宁可不要属于我的奖励和赞赏。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 73,
                'content' => '我认为履行社会义务并不重要  。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 73,
                'content' => '我常常认真地履行我应尽的社会义务。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 74,
                'content' => '在绝大多数情况下，我都非常愿意做领导。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 74,
                'content' => '在绝大多数情况下，我愿意让其他人做领导。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 75,
                'content' => '多年以来，我的价值观与生活方式变化了好几次。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 75,
                'content' => '多年以来，我的价值观与生活方式基本没有变化。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 76,
                'content' => '一般我缺乏自律能力 。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 76,
                'content' => '一般我与别人的联系很少 。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 77,
                'content' => '我不喜欢主动给别人关爱，更希望别人主动进入我的世界。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 77,
                'content' => '我喜欢直接给别人关爱，更希望自己主动进入别人的世界。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 78,
                'content' => '我倾向于作最坏的打算 。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 78,
                'content' => '我倾向于认为任何事情都会变得最好。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 79,
                'content' => '别人依赖我是因为我对自己很有信心且竭尽全力做到最好。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 79,
                'content' => '别人依赖我是因为我做事情非常的公正客观。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 80,
                'content' => '我常常会由于忙于自己的事情而忽略了与他人的交往。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 80,
                'content' => '我常常会由于忙于和他人交往而忽略了自己的事情。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 81,
                'content' => '当第一次遇到某人时，通常我会镇定自若并沉默寡言。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 81,
                'content' => '当第一次遇到某人时，通常我会闲聊并使人觉得有趣。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 82,
                'content' => '我是悲观的人 。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 82,
                'content' => '我是乐观的人 。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 83,
                'content' => '我更喜欢呆在自己的个人世界里  。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 83,
                'content' => '我更喜欢其他所有人都能看到我。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 84,
                'content' => '我常常被紧张、不安全与怀疑而困扰。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 84,
                'content' => '我常常被生气、完美主义与不耐烦而困扰。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 85,
                'content' => '我意识到我是太有人情味与待人太亲密。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 85,
                'content' => '我意识到我是太酷过于冷漠。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 86,
                'content' => '我常常因为错过机会而与成功失之交臂。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 86,
                'content' => '我常常因为去追求更多的可能性而与成功失之交臂',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 87,
                'content' => '我要过很长的时间后才会采取行动。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 87,
                'content' => '我会立即采取行动。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 88,
                'content' => '通常我很难作出决定。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 88,
                'content' => '我很少会感到难作出决定。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 89,
                'content' => '我倾向于给人留下态度强硬的印象。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 89,
                'content' => '我不会固执己见的让别人接受我的观点。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 90,
                'content' => '我的情绪还是比较稳定的。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 90,
                'content' => '我的情绪是非常多变的。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 91,
                'content' => '当不知道要干什么事情时，我常常会向别人寻求建议。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 91,
                'content' => '当我无法确定要做什么事的时候，我倾向于去体验不同的事物来选择最适合我的。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 92,
                'content' => '我担心，别人搞活动时会忘记我。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 92,
                'content' => '我担心，参加了别人的活动而耽误我自己的事情的进度。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 93,
                'content' => '我生气的时候会去责怪别人。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 93,
                'content' => '我生气的时候会一言不发，不想说话。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 94,
                'content' => '我进入睡眠比较困难。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 94,
                'content' => '我进入睡眠比较容易 。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 95,
                'content' => '我常常努力地思考如何与别人产生更为亲密的关系。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 95,
                'content' => '我常常努力地思考别人想从我这儿得到什么。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 96,
                'content' => '通常我是慎重的、有话直说的并且深思熟虑的人。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 96,
                'content' => '我往往比较容易兴奋，为了不正面回馈问题会说话语速较快，而且比较机智。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 97,
                'content' => '当看到别人犯错误时，我常常不说出口。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 97,
                'content' => '当看到别人犯错误时，我常常会帮助他们认识到所犯的错误。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 98,
                'content' => '大部分时候，我的情感比较丰富，而且情感变化比较快。"',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 98,
                'content' => '大部分时候，我情绪比较稳定，宠辱不惊。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 99,
                'content' => '即便有的人我不喜欢甚至反感，我也可以做到评比反感的情绪来尽量维持我的态度和热情。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 99,
                'content' => '如果有的人我不喜欢或者反感，我会直接或间接的反映出我的态度。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 100,
                'content' => '我不善于与人交往，可能是因为我心里比较敏感而且做事情喜欢站在自己的角度。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 100,
                'content' => '我与别人交往有困难是因为我不太在乎社会习俗。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 101,
                'content' => '我的方法是直接帮助他人。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 101,
                'content' => '我希望告诉他人怎么自力更生进行自救。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 102,
                'content' => '总的来说，我热衷于打破束缚释放自己。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 102,
                'content' => '总的来说，我还是希望有一定的约束和要求来控制自己。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 103,
                'content' => '我过度地关注于要比别人做得好。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 103,
                'content' => '我过度地关注于把别人的事做好就行。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 104,
                'content' => '我的想法总是很玄想的——包含着想象与好奇。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 104,
                'content' => '我的想法总是很实际的——只是试图保持事情的发展状况。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 105,
                'content' => '我的主要优势之一就是我能够控制场面。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 105,
                'content' => '我的主要优势之一就是我能够讲述内心的感受。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 106,
                'content' => '我努力争取做好事情而不管这样会使别人不开心。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 106,
                'content' => '我不喜欢有压力的感觉，所以也不喜欢压制别人  。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 107,
                'content' => '我经常因为我在别人的生活当中发挥着非常大的作用而特别自豪。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 107,
                'content' => '我常常感到骄傲因为我对新的经历会很感兴趣并且乐于接受。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 108,
                'content' => '我觉得我在别人的眼中是非常棒的，而且可能别人都对我很钦佩。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 108,
                'content' => '我认为我给别人留下的印象是与众不同的甚至很古怪。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 109,
                'content' => '一般我做我必须去做的事。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 109,
                'content' => '一般我做我想做的事。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 110,
                'content' => '我很喜欢处于高度的压力之下甚至是困难的情景中。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 110,
                'content' => '我不喜欢处于高度的压力之下甚至是困难的情景中。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 111,
                'content' => '我以我的随机应变能力而自豪——我很清楚合适的和关键的情况是会不断变化的。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 111,
                'content' => '我为自己的立场感到骄傲——我有坚定的信念。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 112,
                'content' => '我的风格倾向于节约而朴实。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 112,
                'content' => '我的风格倾向于过度并过量地做某些事情。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 113,
                'content' => '我特别想去帮助别人，以至于我的个人健康和个人幸福都可能会受到伤害还乐此不疲。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 113,
                'content' => '我的人际关系受到损害因为我只关注与自己的需要。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 114,
                'content' => '总的来说，我太坦诚太天真  。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 114,
                'content' => '总的来说，我过于谨慎过于戒备  。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 115,
                'content' => '有时我因过于好斗而令人厌恶  。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 115,
                'content' => '有时我因太紧张而令人厌恶  。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 116,
                'content' => '关心别人的需要并提供服务对我来说是很重要的。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 116,
                'content' => '寻找看待并做好事情的其他方法对我来说是很重要的。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 117,
                'content' => '我全身心地持之以恒地追求我的目标。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 117,
                'content' => '我喜欢探索各种行动的途径，想看看最终的结果如何。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 118,
                'content' => '我经常会激起强烈与紧张的情绪。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 118,
                'content' => '我经常使自己冷静与安逸 。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 119,
                'content' => '我不太注重实际的结果，而注重自己的兴趣。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 119,
                'content' => '我很实际并希望我的工作有具体的结果。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 120,
                'content' => '我有强烈的归属需要 。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 120,
                'content' => '我有强烈的平衡需要 。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 121,
                'content' => '过去我可能过于要求朋友间的亲密。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 121,
                'content' => '过去我可能过于要求朋友间的疏远。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 122,
                'content' => '我倾向于回忆过去的事情 。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 122,
                'content' => '我倾向于预期未来所要做的事情。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 123,
                'content' => '我倾向于将人看作是很麻烦的、苛刻的。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 123,
                'content' => '我倾向于将人看作是很莽撞的，和有需求的。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 124,
                'content' => '总的来说，我不太自信 。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 124,
                'content' => '总的来说，我仅相信自己 。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 125,
                'content' => '我可能太被动，不积极参与  。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 125,
                'content' => '我可能控制过多 。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 126,
                'content' => '我经常因为怀疑自己而停下来  。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 126,
                'content' => '我很少会怀疑自己 。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 127,
                'content' => '我倾向于选择新的东西，而不选择熟悉的东西。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 127,
                'content' => '我倾向于选择我喜欢的东西，对我不喜欢的那些东西会觉得非常的失望。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 128,
                'content' => '我喜欢通过与别人的身体的接触来告诉他们我是爱他们的。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 128,
                'content' => '我认为真正的爱是不需要身体的接触。',
                'character_type_id' => 1,
            ],


            [
                'question_id' => 129,
                'content' => '当我需要责备别人时，我是很严厉很直截了当的。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 129,
                'content' => '当我需要责备别人时，我常常是旁敲侧击的。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 130,
                'content' => '我对别人认为很困扰甚至很可怕的学科却很感兴趣。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 130,
                'content' => '我不喜欢去研究令人困扰的、可怕的学科。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 131,
                'content' => '我因防碍、干扰别人，而受到指责。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 131,
                'content' => '我因过于逃避、沉默寡言而受到别人的指责。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 132,
                'content' => '我担心没有办法履行我的职责  。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 132,
                'content' => '我担心自己缺乏自律不能履行职责。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 133,
                'content' => '总而言之，我做事的时候非常相信自己的直觉，而且比较自我和个人主义。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 133,
                'content' => '总的来说我是一个很有组织的并且负责任的人。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 134,
                'content' => '克服惰性是我的主要问题之一。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 134,
                'content' => '不能缓慢下来是我的主要问题之一。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 135,
                'content' => '如果我感到不安全因素的存在，我可能会呈现出傲慢和轻视的态度。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 135,
                'content' => '当我觉得不安全时，我会自卫并变得好争论。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 136,
                'content' => '我是思想开明的，乐意尝试新的方法。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 136,
                'content' => '我会表白真情，乐意与别人共享我的情感。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 137,
                'content' => '在别人面前我会表现得比实际的我更为强硬些。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 137,
                'content' => '在别人面前我会表现得比实际的我更为在意些。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 138,
                'content' => '通常我是按我的良心与理性去做事情。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 138,
                'content' => '通常我是按我的感觉与冲动去做事情。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 139,
                'content' => '严峻的逆境使我变得坚强 。',
                'character_type_id' => 3,
            ],
            [
                'question_id' => 139,
                'content' => '严峻的逆境使我变得气馁与听天由命。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 140,
                'content' => '我确信有某种“安全网”以依靠 。',
                'character_type_id' => 6,
            ],
            [
                'question_id' => 140,
                'content' => '我常常要选择居于边缘而无所依靠。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 141,
                'content' => '为了让别人安心我会表现的非常坚强，导致我根本没空来考虑和照顾到自己的安危和情绪。',
                'character_type_id' => 8,
            ],
            [
                'question_id' => 141,
                'content' => '我对自己的情绪和担忧无法处理，因此我也没法为了考虑到别人而假装坚强。',
                'character_type_id' => 4,
            ],
            [
                'question_id' => 142,
                'content' => '令我百思不得其解的是，其实生活当中有很多的美好和快乐，可是很多人都看不到，他们只能看到消沉和忧郁。',
                'character_type_id' => 9,
            ],
            [
                'question_id' => 142,
                'content' => '我常常觉得奇怪，生活中很糟糕为什么人还这么开心。',
                'character_type_id' => 1,
            ],
            [
                'question_id' => 143,
                'content' => '我努力使自己不被看作为自私的人。',
                'character_type_id' => 2,
            ],
            [
                'question_id' => 143,
                'content' => '我努力使自己不被看作为令人讨厌的人。',
                'character_type_id' => 7,
            ],
            [
                'question_id' => 144,
                'content' => '我不喜欢与别人保持亲密的情感联系，因为我怕受到别人的要求和限制压垮我。',
                'character_type_id' => 5,
            ],
            [
                'question_id' => 144,
                'content' => '我不喜欢与别人保持亲密的情感联系，因为我很怕会让别人对我失望。',
                'character_type_id' => 3,
            ],
        ];

        foreach ($options2 as $key => $item) {
            $options2[$key]['question_id'] =  $item['question_id'] + 36;
        }
        foreach ($options3 as $key => $item) {
            $options3[$key]['question_id'] =  $item['question_id'] + 36 + 45;
        }

        DB::table('question_options')->insert(array_merge($options, $options2, $options3));
    }
}
