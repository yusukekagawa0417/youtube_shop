<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * データベースに対するデータ設定の実行
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'asin' => 'B079VNN2FX',
                'name' => '自分の中に毒を持て',
                'description' => '長年愛されてきたロングセラーが、満を持しての新装刊。 文字が大きく読みやすくなり、カラー口絵付きで、パワーアップして生まれ変わりました！“才能なんて勝手にしやがれだ” “だめ人間なら、そのマイナスに賭けてみろ”岡本太郎の遺した作品と言葉は、いまでも私たちに鋭く問いかけています。 瞬間を生き抜く、岡本太郎のパッションは、強い力をもって私たちの生命にズシンと響くのです。さあ、あなたも歓喜と驚きに満ちた人生をつかみとってください。',
                'url' => 'https://www.amazon.co.jp/gp/product/B079VNN2FX/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B079VNN2FX&linkCode=as2&tag=kagaway-22&linkId=6a4af7dbd4d106cba81e7d21b0152ebf',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B079VNN2FX&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => '4862760856',
                'name' => 'イシューからはじめよ',
                'description' => '★ロジカルシンキング・問題解決の決定版!
                ★AI×データ時代の必携書。支持され続けて28万部突破!
                
                やるべきことは、100分の1になる!
                コンサルタント、研究者、マーケター、プランナー……
                生み出す変化で稼ぐ、プロフェッショナルのための思考術
                「脳科学×マッキンゼー×ヤフー」
                トリプルキャリアが生み出した究極の問題設定&解決法
                
                〈圧倒的に生産性の高い人〉に共通する問題設定&解決法
                「イシュー」とは、「2つ以上の集団の間で決着のついていない問題」であり「根本に関わる、もしくは白黒がはっきりしていない問題」の両方の条件を満たすもの。
                あなたが「問題だ」と思っていることは、そのほとんどが、「いま、この局面でケリをつけるべき問題=イシュー」ではない。',
                'url' => 'https://www.amazon.co.jp/gp/product/4862760856/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=4862760856&linkCode=as2&tag=kagaway-22&linkId=eb6ed98651de96827ad85eff43dd0d91',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=4862760856&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => '4910063137',
                'name' => '2030年:すべてが「加速」する世界に備えよ',
                'description' => '◎早くも11万部突破!
                ◎『週刊東洋経済』ベストブック2021特集 「未来予測本」ランキング 第1位
                ◎イーロン・マスクの盟友が「この先10年の未来」を全方位ガイド!
                ◎学生から投資家・経営者まで、全業界の「この先10年の地殻変動」が1冊ですべてわかる!
                ◎Forbes誌「2020年のトップ10ビジネスブック」選出
                
                
                小売、広告、エンタテインメント、交通、教育、医療、長寿、金融、不動産、環境……
                テクノロジーの“融合"によって、大変化は従来予想より20年早くやってくる。
                エリック・シュミット(Google元CEO)、クリントン元大統領ら世界のビジョナリーが支持する
                「シリコンバレーのボス」が、この先10年のビジネス・産業・ライフスタイルを1冊で解説!',
                'url' => 'https://www.amazon.co.jp/gp/product/4910063137/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=4910063137&linkCode=as2&tag=kagaway-22&linkId=ffb6ca280efc1bfa10e1984539032fa0',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=4910063137&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => 'B00KFB5DJC',
                'name' => '7つの習慣',
                'description' => '全世界4,000万部、国内240万部を超え、今も読み続けられるビジネス書のベストセラー『7つの習慣』は、人生哲学の定番として親しまれてきました。

                今回スティーブン・R・コヴィー博士没後1年を期に、『7つの習慣』が本来持つ「人格主義」に基づき、原書に忠実に訳し直しました。
                よりわかりやすく理解しやすい完全訳の『完訳 7つの習慣 人格主義の回復』。
                豊かな人生を望むすべての人にお届けします。',
                'url' => 'https://www.amazon.co.jp/gp/product/B00KFB5DJC/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B00KFB5DJC&linkCode=as2&tag=kagaway-22&linkId=6eed84f2817f4665431328d86979d881',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B00KFB5DJC&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => 'B01AHEL75K',
                'name' => 'ゼロ秒思考',
                'description' => '累計30万部突破のロングセラー！
                トップアスリートも戦略コンサルタントも実践する、
                頭がよくなり、心も鍛えられるトレーニング。
                
                マッキンゼーで14年間活躍した著者の独自メソッド――
                
                それは、「メモ書き」によって思考と感情の言語化をトレーニングすることで、
                どんな人でも確実に頭がよくなり、心も鍛えられるというもの。
                著者が二十数年にわたって改良を続け、
                クライアント先で実践してもらうことで、
                すでに数千人を超える人が効果を実感している。
                
                誰でも、どこでもできて、お金もほとんどかからないシンプルな方法ながら、
                実践した多くの人が、
                「明らかに日々の思考量や行動量が増えた」
                「打てば響くような会話ができるようになった」
                「オリジナルな企画書をすぐに書けるようになった」
                「自分に自信がついた」
                「気持ちを素直に伝えらえるようになった」
                という。
                
                本書はそのトレーニングの方法を詳細に解説し、
                著者の考える思考の質とスピードの到達点、
                「ゼロ秒思考」への道を紹介するものである。',
                'url' => 'https://www.amazon.co.jp/gp/product/B00HQ6O7BO/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=B00HQ6O7BO&linkCode=as2&tag=kagaway-22&linkId=772119d8cf2295dd66dc00e19071348a',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=B00HQ6O7BO&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => '442210098X',
                'name' => '人を動かす',
                'description' => '邦訳500万部突破の歴史的ベストセラー。
                人づきあいの根本原則を実例豊かに説き起こし、時代を超えて読み継がれる不朽の名著。
                
                あらゆる自己啓発書の原点となったデール・カーネギー不朽の名著。
                人が生きていく上で身につけるべき人間関係の原則を、
                長年にわたり丹念に集めた実話と、実践で磨き上げた事例を交え説得力豊かに説き起こす。
                深い人間洞察とヒューマニズムを根底に据え、
                人に好かれて人の心を突き動かすための行動と自己変革を促す感動の書。
                1936年の初版刊行以来、時代に合わなくなった部分を改良するなど、
                折々に改訂が施されてきた現行の公式版。',
                'url' => 'https://www.amazon.co.jp/gp/product/442210098X/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=442210098X&linkCode=as2&tag=kagaway-22&linkId=c527df763c9df84326a91685477c7ada',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=442210098X&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => '4532321433',
                'name' => 'さあ、才能(じぶん)に目覚めよう',
                'description' => '「才能を隠してはならない。それは、使うためにつくられたものだ。日陰に置かれた日時計にいったい何の意味があるだろう」 ベンジャミン・フランクリン

                「強みの活かし方」が資質ごとにわかる。待望の新版、ついに登場!
                皆さんは毎日、自分の強みを使うチャンスがあるだろうか。おそらくないだろう。多くの場合、才能は未開発のままだ。ゆりかごから職場まで、私たちは強みを伸ばすよりも欠点を直すために多くの時間を割いている。',
                'url' => 'https://www.amazon.co.jp/gp/product/4532321433/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=4532321433&linkCode=as2&tag=kagaway-22&linkId=8a894babaab2fc5246cfbd784f3d98ff',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=4532321433&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => '4822289605',
                'name' => 'FACTFULNESS(ファクトフルネス) 10の思い込みを乗り越え、データを基に世界を正しく見る習慣',
                'description' => 'ファクトフルネスとは――データや事実にもとづき、世界を読み解く習慣。賢い人ほどとらわれる10の思い込みから解放されれば、癒され、世界を正しく見るスキルが身につく。
                世界を正しく見る、誰もが身につけておくべき習慣でありスキル、「ファクトフルネス」を解説しよう。
                
                世界で300万部の大ベストセラー!
                
                * ビル・ゲイツ、バラク・オバマ元アメリカ大統領も大絶賛!
                「名作中の名作。世界を正しく見るために欠かせない一冊だ」―ビル・ゲイツ
                「思い込みではなく、事実をもとに行動すれば、人類はもっと前に進める。そんな希望を抱かせてくれる本」―バラク・オバマ元アメリカ大統領',
                'url' => 'https://www.amazon.co.jp/gp/product/4822289605/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=4822289605&linkCode=as2&tag=kagaway-22&linkId=0c941a8e2cfea88455ca27d86b35620e',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=4822289605&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => '4799108425',
                'name' => '人は話し方が9割',
                'description' => '【★2021年1番売れてる会話の本! 2021年上半期ビジネス書ランキング1位(日販、トーハン)! 2020年年間ランキング1位!(日販・ビジネス書/TSUTAYA・書籍総合)】
                【★「読者が選ぶビジネス書グランプリ2021」特別賞受賞!】
                【★「中田敦彦のYouTube大学」でオリエンタルラジオ中田敦彦さん、大興奮! 】
                「もう会話で悩まない!疲れない!オロオロしない!」――もっと話し方がうまければ、人生うまくいくのに……。「話すこと」にまつわる悩みを挙げるとキリがありません。本書でお伝えするのは、コミュニケーションの基本である会話がうまくいくようになる、ちょっとした、でも多くの人が気づいていないエッセンス。過去に会話で失敗したトラウマもあっさり消え去ってしまうほど、人と話すことがラクになり、人間関係も、人生も、全部がよりよい方向に動き出します!',
                'url' => 'https://www.amazon.co.jp/gp/product/4799108425/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=4799108425&linkCode=as2&tag=kagaway-22&linkId=b9f2e4b6e02ff3a093122978d96c48fa',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=4799108425&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
            [
                'asin' => '4478108498',
                'name' => '1%の努力',
                'description' => '☆テレビ出演やYouTube動画で話題沸騰。24万部を突破!!

                □「一気に読めて、気持ちがラクになった」「ビジネス書なのに感動した」「これまでの本の中で一番面白い」と、大反響! ! !
                ■世界一の管理人が、初めてマジメに語る「人生論」の完全決定版!!
                
                □学生起業を皮切りに「2ちゃんねる」「ニコニコ動画」「4chan」そしてYouTube動画でも話題に…
                ■「ひらめきもないまま無駄な努力を重ねている人が多すぎる。」',
                'url' => 'https://www.amazon.co.jp/gp/product/4478108498/ref=as_li_tl?ie=UTF8&camp=247&creative=1211&creativeASIN=4478108498&linkCode=as2&tag=kagaway-22&linkId=c7c388a603d90fc7d5360500bc3b7235',
                'image' => '//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=JP&ASIN=4478108498&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL250_&tag=kagaway-22',
            ],
        ]);
    }
}
