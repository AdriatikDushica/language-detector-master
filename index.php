<?php

exec('composer dump-autoload');

include 'vendor/autoload.php';

\Symfony\Component\Debug\Debug::enable();

use \Adriatikdushica\Language\MaskPercentage;

//$text = "
//    Endometrial cancer is a gynecological cancer that arises from the endometrium (the lining of the uterus or womb).[1] It is the result of the abnormal growth of cells that have the ability to invade or spread to other parts of the body.[2] The first sign is most often vaginal bleeding not associated with a woman's period. Other symptoms include pain with urination or sexual intercourse, or pelvic pain.[1] Endometrial cancer occurs most commonly after menopause.[3]
//
//    Approximately 40% of cases are related to obesity.[4] Endometrial cancer is also associated with excessive estrogen exposure, high blood pressure and diabetes.[1] Whereas taking estrogen alone increases the risk of endometrial cancer, taking both estrogen and progesterone in combination, as in most birth control pills, decreases the risk.[1][4] Between two and five percent of cases are related to genes inherited from the woman's parents.[4] Endometrial cancer is sometimes loosely referred to as \"uterine cancer\", although it is distinct from other forms of uterine cancer such as cervical cancer, uterine sarcoma, and trophoblastic disease.[5] The most frequent type of endometrial cancer is endometrioid carcinoma, which accounts for more than 80% of cases.[4] Endometrial cancer is commonly diagnosed by endometrial biopsy or by taking samples during a procedure known as dilation and curettage. A pap smear is not typically sufficient.[6] Regular screening in those at normal risk is not called for.[7]
//
//    The leading treatment option for endometrial cancer is abdominal hysterectomy (the total removal by surgery of the uterus), together with removal of the fallopian tubes and ovaries on both sides, called a bilateral salpingo-oophorectomy. In more advanced cases, radiation therapy, chemotherapy or hormone therapy may also be recommended. If the disease is diagnosed at an early stage, the outcome is favorable,[6] and the overall five-year survival rate in the United States is greater than 80%.[8]
//
//    In 2012, endometrial cancers occurred in 320,000 women and caused 76,000 deaths.[4] This makes it the third most common cause of death from women's cancers, behind ovarian and cervical cancer. It is more common in the developed world[4] and is the most common cancer of the female reproductive tract in developed countries.[6] Rates of endometrial cancer have risen in a number of countries between the 1980s and 2010.[4] This is believed to be due to the increasing number of elderly people and increasing rates of obesity.[9]
//";

$text = "

    La locuzione infarto miocardico acuto indica la necrosi dei miociti provocata da ischemia prolungata, susseguente a inadeguata perfusione del miocardio per squilibrio fra richiesta e offerta di ossigeno, spesso secondaria all'occlusione di una coronaria causata da un trombo.

    Se l'ostruzione coronarica conduce all'arresto totale del flusso sanguigno nel territorio irrorato dall'arteria interessata, provocando nell'ECG un sopraslivellamento del tratto ST, l'infarto è denominato STEMI (ST elevation myocardial infarction). Se invece l'occlusione della coronaria è parziale o transitoria, come evidenziato dalla presenza di sottoslivellamento del tratto ST all'esame elettrocardiografico, l'evento è definito NSTEMI (Non-ST elevation myocardial infarction).

    Le patologie cardiovascolari rappresentano la principale causa di morte nelle nazioni industrializzate, ma anche paesi in via di sviluppo come l'India non ne sono esenti. L'Organizzazione mondiale della sanità ha individuato numerosi fattori di rischio che provocano decessi, perdita di anni di vita in buona salute e aumento delle spese sanitarie in Italia, così come nel resto dell'Europa e del mondo; alcuni dei suddetti elementi di rischio, come ad esempio obesità e sovrappeso, fumo di sigaretta, abuso di alcool, sedentarietà, ipercolesterolemia, ipertensione arteriosa e diabete mellito, sono suscettibili di correzione mediante opportune modifiche dello stile di vita.

";

$maskPercentage = new MaskPercentage($text);

echo $maskPercentage->currentLanguage;