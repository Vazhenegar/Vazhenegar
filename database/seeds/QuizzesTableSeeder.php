<?php

use Illuminate\Database\Seeder;
use App\Language;
use App\TranslationField;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//for quantification of quizzes table with array of texts in various courses
        $Quizzes = [
            //  languages: english
            1 => [
//              translation field  ادبیات و زبان شناسی
                1 => [
                    [
                        'text_id' => '1',
                        'quiz_text' => 'Tommy shouted. His face twitched in desperation. “What did I do?!”"”What?!
 A penalty was awarded by everyone on Rudy’s team, and now it was Rudy Steiner against the new kid, Liesel Meminger.
He placed the ball on a grubby mound of snow, confident of the usual outcome. After all, Rudy hadn’t missed a penalty in eighteen shots, even when the opposition made a point of booting Tommy Muller out of goal. No matter whom They replaced him with, Rudy would score.
On this occasion, they tried to force Liesel out. As you might imagine, she protested, and Rudy agreed.
‘No, no.’ he smiled. ‘Let her stay.’ He was rubbing his hands together.
',
                    ],
                    [
                        'text_id' => '2',
                        'quiz_text' => 'Traditional narrative in Turkish Cinema has always made its dominance felt. The biggest difference occurred in classical narrative is modern narrative structures which have commercial concerns and aim to provide identification and detach audience from real life during the film. Directors of Turkish Cinema like Ömer Lütfi Akad, Yılmaz Güney, Metin Erksan have made social themed films with the aim of being free from Yeşilcam influence and passing over melodramatic structure.',
                    ],
                    [
                        'text_id' => '3',
                        'quiz_text' => 'Publishing research results is an integral part of a researcher’s professional life. However, writing is not every researcher’s favorite activity, and the obstacles of getting a paper published can be nerve-wracking. This paper gives an introductory report on basic issues of writing and organizing scientific papers, and getting them published. The paper also outlines the process of publishing research papers in journals and conference proceedings, aiming to provide interested novices with a handy introductory guide.',
                    ],
                    [
                        'text_id' => '4',
                        'quiz_text' => 'The objective of this paper was to give an introductory report on basic issues of writing and organizing scientific papers as well as on the process of getting a research paper published in a journal or in conference proceedings. It should be useful for beginners (e.g., PhD students) seeking to join the publishing scientific community. As the whole of this subject area is too complex and extensive to be discussed in detail within the scope of this brief paper, not all aspects of writing and publishing scientific papers have been considered with appropriate attention. However, this paper includes a list of useful references to printed and online sources for readers interested in details, whereas I highly recommend two works of remarkable quality: Robert Day’s “How to Write and Publish a Scientific Paper”, and Meave O’Connor’s “Writing Successfully in Science” should answer most of the questions arising on the topic.',
                    ],
                    [
                        'text_id' => '5',
                        'quiz_text' => 'Of all the literary arts, the genre of Nonsense Poetry should allow for some of the most creative uses of human language. As seen in the data, many of these poets create entirely new words in their languages, but only one poet goes as far as attempting to create a truly nonsensical, that is, non-human utterance. This, however, is still a symbol recognized by most humans who are familiar with mathematics. It is not that these poets are not fully exercising their capacities for creativity; rather, they are confined by the constraints of human language and of their own English language. English speaking poets will inevitably choose not only human segments, but specifically English segments. Working within the orthography of their own language, in order to represent even nonsense words, they must stay within the English alphabet. Only Burgess (1979) steps outside the realm of the alphabet and inserts the mathematical symbol for a square root, but this is fairly easily recognized and read as “the square root of.” In order for poetry, even nonsense, to be read by English speakers, poets must be confined to segments (the alphabet) familiar to their readers.',
                    ],
                    [
                        'text_id' => '6',
                        'quiz_text' => 'As has been seen, the approach we have followed is purely minimalist in which A-movement is an essential feature in deriving SV sentences in SA. Moreover, the approach expresses the nature of passivization in SA by introducing a Voice° having a valued (-active) feature and the passive infix as its specifier to be picked up by the verb. We believe that this approach can be extended to other contexts that passives in SA occur in such as prepositional passives and passives with case assigners.',
                    ],
                    [
                        'text_id' => '7',
                        'quiz_text' => 'What is ‘literary theory’? How has it developed? What does it do? Why is it necessary, and/or what is it good for? What are the arguments for it and why the resistance to it? Is it, in fact, an ‘it at all, a single definable entity or phenomenon? All of these questions sound as if they belong in an exam; none of them are easy to answer, certainly not in so short a space as a foreword or introduction. But I want to begin by outlining very broadly a few responses.',
                    ],
                ],

//  ============= /. END OF ادبیات و زبان شناسی
//              translation field  کامپیوتر و آی تی

                21 => [
                    [
                        'text_id' => '1',
                        'quiz_text' => 'RFID tags have become ubiquitous and cheaper to implement. It is often imperative to design ultralightweight authentication protocols for such tags. Many existing protocols still rely on triangular functions, which have been shown to have security and privacy vulnerabilities. This work proposes UMAPSS, an ultralightweight mutual-authentication protocol based on Shamir’s (2,n) secret sharing. It includes mechanisms for double verification, session control, mutual authentication, and dynamic update to enhance security and provide a robust privacy protection. The protocol relies only on two simple bitwise operations, namely addition modulo 2m and a circular shift Rot(x, y), on the tag’s end. It avoids other, unbalanced, triangular operations.
A security analysis shows that the protocol has excellent privacy properties while offering a robust defense against a broad range of typical attacks. It satisfies common security and the lowcost requirements for RFID tags. It is competitive against existing protocol, scoring favourably in terms of computational cost, storage requirement, and communication overhead.
',
                    ],
                    [
                        'text_id' => '2',
                        'quiz_text' => 'To overcome known security weaknesses and/or privacy omission in previous ultralightweight authentication protocols, we propose UMAPSS. It incorporates the (2,n) Shamir’s secret sharing and achieves significant security enhancement. It supplies a robust privacy protection through mechanisms for double verification and mutual authentication. It reduces the overtime security omission using a session control mechanism. It ensures unlinkability and randomization by applying a dynamic update mechanism. Based on typical security characteristics and the ability to resist malicious attacks, our protocol performs favourably. It is ultralightweight, requiring only two simple bitwise operations on low-cost RFID tags without significantly increasing the burden at both the tag’s and the server’s ends. It removes triangular function operations, lessening exposure to security issues related to their biased outputs. UMAPSS balances superior security performance and practical competitiveness.',
                    ],
                    [
                        'text_id' => '3',
                        'quiz_text' => 'The mechanism of business analytics affordances enhancing the management of cloud computing data security is a key antecedent in improving cloud computing security. Based on information value chain theory and IT affordances theory, a research model is built to investigate the underlying mechanism of business analytics affordances enhancing the management of cloud computing data security. The model includes business analytics affordances, decision-making affordances of cloud computing data security, decision-making rationality of cloud computing data security, and the management of cloud computing data security. Simultaneously, the model considers the role of data-driven culture and IT business process integration. It is empirically tested using data collected from 316 enterprises by Partial Least Squares-based structural equation model. Without data-driven culture and IT business process integration, the results suggest that there is a process from business analytics affordances to decision-making affordances of cloud computing data security, decision-making rationality of cloud computing data security, and to the management of cloud computing data security. Moreover, Data-driven culture and IT business process integration have a positive mediation effect on the relationship between business analytics affordances and decision-making affordances of cloud computing data security. The conclusions in this study provide useful references for the enterprise to strengthen the management of cloud computing data security using business analytics.',
                    ],
                    [
                        'text_id' => '4',
                        'quiz_text' => 'The results also provide some important practical implications for the MCCDS. (1) The results help the enterprise rationally enhance the MCCDS by business analytics. Although the existing literatures show that the rational decisionmaking based on business analytics is better than the intuitive decisionmaking based on experience, there is still a lack of literatures on how to guide the enterprise rationally enhance the MCCDS using business analytics. Based IT affordances, the study makes up for the lack of experience, time, and energy for the enterprise to improve the MCCDS using business analytic. Simultaneously, the results help the enterprise search, explain, evaluate and identify data security requirements by business analytics, and then help the enterprise improve DRC and rationally enhance the MCCDS by business analytics. (2) The results guide the enterprise to pay attention to the role of DDC and IBI.',
                    ],
                ],
//  ============= /. END OF کامپیوتر و آی تی
//              translation field  مدیریت
                24 => [
                    [
                        'text_id' => '1',
                        'quiz_text' => 'In Korea, traditional retail districts face a serious situation whereby businesses in downtown areas face collapsing as local population declines: resulting in a decrease in self-employed sales and a declining local economy. Traditional retailers use ambiguous accounting and are reluctant to use credit cards, and thus, the overall reliability of their customer data is low. This paper solves this problem by applying the concept of customer equity (CE). We conducted an empirical analysis through questionnaires to identify differences in CE between traditional and new retail formats. The questionnaire consisted of questions related to CE (value equity, brand equity, relation equity), satisfaction, loyalty, and demographic characteristics. CE and satisfaction were measured on a 5-point Likert scale. A total of 400 surveys were completed, resulting in 391 usable returns for analysis in this study. In the regression analysis between CE and customer satisfaction, both old and new retail firms showed statistically significant effects. In the traditional retail industry, value equity and brand equity were statistically significant, while relation equity were not.',
                    ],
                    [
                        'text_id' => '2',
                        'quiz_text' =>'This study has the following limitations. This paper has applied CE theory to the retail distribution field and has contributed empirically to theoretical expansion, but it still has limitations. In this paper, there are several fields, such as large-scale shopping malls, convenience stores, and online shopping malls, and it analyzed only two. Second, Nam et al. (2011) pointed out that the results of this paper cannot represent the entire distribution industry, due to the limitations of the number of survey respondents. Therefore, in future research, it is necessary to set up a sample that can represent the whole nation, and the entire distribution industry, by expanding the survey target area and conducting research. In that case, research results that are representative of the whole nation and the whole distribution industry can be produced, and it would be very helpful for the follow-up research. What the conclusions is that, the next studies are necessary to incorporate different retail stores such as department store or convenience store to access the relative levels of emotional attachment or commitment of customer, which helps to encourage very long-term relationship and sustainable patronage in retailing.',
                    ],
                ],
                //  ============= /. END OF مدیریت


            ],
        ];

        foreach ($Quizzes as $lang_id => $fields) {
            foreach ($fields as $field_id => $text) {
                foreach ($text as $item) {
                    DB::table('quizzes')->insert([
                        'SourceLanguageId' => $lang_id,
                        'TranslationFieldId' => $field_id,
                        'TextId' => $item['text_id'],
                        'QuizContent' => $item['quiz_text'],
                    ]);
                }
            }
        }

    }
}
