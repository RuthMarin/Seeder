<?php

use Illuminate\Database\Seeder;

class InvestigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Roberto Gonzalez
    	//Google schoolar
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Identifying sarcasm in Twitter: a closer look',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Roberto González-Ibánez, Smaranda Muresan, Nina Wacholder',
                'investigationAbstract' => 'Sarcasm transforms the polarity of an apparently positive or negative utterance into its opposite. We report on a method for constructing a corpus of sarcastic Twitter messages in which determination of the sarcasm of each message has been made by its author. We use this reliable corpus to compare sarcastic utterances in Twitter to utterances that express positive or negative attitudes without sarcasm. We investigate the impact of lexical and pragmatic factors on machine learning effectiveness for identifying sarcastic utterances and we compare the performance of machine learning techniques and human judges on this task. Perhaps unsurprisingly, neither the human judges nor the machine learning techniques perform very well.',
                'page_id' => 2,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Evaluating the synergic effect of collaboration in information seeking',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Chirag Shah, Roberto González-Ibáñez',
                'investigationAbstract' => "It is typically expected that when people work together, they can often accomplish goals that are difficult or even impossible for individuals. We consider this notion of the group achieving more than the sum of all individuals' achievements to be the synergic effect in collaboration. Similar expectation exists for people working in collaboration for information seeking tasks. We, however, lack a methodology and appropriate evaluation metrics for studying and measuring the synergic effect. In this paper we demonstrate how to evaluate this effect and discuss what it means to various collaborative information seeking (CIS) situations. We present a user study with four different conditions: single user, pair of users at the same computer, pair of users at different computers and co-located, and pair of users remotely located. Each of these individuals or pairs was given the same task of information seeking and usage for the …",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Exploring information seeking processes in collaborative search tasks',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Chirag Shah, Roberto González‐Ibáñez',
                'investigationAbstract' => "Many theories and models exist for understanding and explaining information seeking processes (ISP) for individuals. Such is not the case for collaborative information seeking (CIS), despite its growing importance. In this paper we take Kuhlthau's ISP model, designed for individual information seeking, and map it to a CIS situation. We present a laboratory study with 84 participants in 42 pairs and demonstrate how their information seeking processes over two sessions can be mapped to various stages of the ISP model. In addition, we explore the affective dimension of information seeking as well as perceived relevance expressed by the participants through their interactions. We discuss similarities and disparities of ISP for individuals and collaborative information seeking. In particular, we show that there is a logical progression from uncertainty about the task to being satisfied about the collected information among …",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Coagmento: A system for supporting collaborative information seeking',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Roberto González‐Ibáñez, Chirag Shah',
                'investigationAbstract' => "In this demo we introduce Coagmento, a tool for supporting interactive information seeking process of teams in various collaborative scenarios. Coagmento has been used in several laboratory and field studies to understand issues related to collaborative information seeking (CIS) and deriving lessons and guidelines for providing suitable support for people working in collaboration for information‐intensive projects. From its initial design, Coagmento has evolved through the introduction of new features and the support for both web‐based as well as mobile systems. Using appropriate research methodologies, Coagmento has proven to be a useful tool for collecting behavioral data of users enabling researchers to better understand different dimensions of the collaborative process of teams as well as single users while searching information online.",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Let’s search together, but not too close! An analysis of communication and performance in collaborative information seeking',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Roberto González-Ibáñez, Muge Haseki, Chirag Shah',
                'investigationAbstract' => "Communication is considered to be one of the most essential components of collaboration, but our understanding as to which form of communication provides the most optimal cost-benefit balance lacks severely. To help investigate effects of various communication channels on a collaborative project, we conducted a user study with 30 pairs (60 participants) in three different conditions – co-located, remotely located with text chat, and remotely located with text as well as audio chat, in an exploratory search task. Using both quantitative and qualitative data analysis, we found that teams with remotely located participants were more effective in terms of being able to explore more diverse information. Adding audio support for remote collaboration helped participants to lower their cognitive load as well as negative emotions compared to those working in the same space. We also show how these findings could help …",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Exploration of Dynamic Query Suggestions and Dynamic Search Results For Their Effects on Search Behaviors',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Chirag Shah, Jingjing Liu, Roberto González-Ibáñez, Nicholas Belkin',
                'investigationAbstract' => "While search behavior using dynamic query suggestions is understudied, it is virtually non‐existent for dynamic search results (as currently experienced with Google Instant). We report results from a controlled lab study aimed at exploring the effects of these recent search interface developments – dynamic query suggestions and dynamic search results – on users' search behaviors. Based on the availability of these two features, 36 participants were assigned to three conditions and were asked to complete an exploratory search task. Analyses on user behaviors were conducted based on log data, screen videos, and eye tracking. Our results showed that while the dynamic search results feature exposed the participants to more search results pages, shorter querying time and shorter queries, such a functionality did not change users' general search process transition, as well as number of search sites, queries, and …",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Spatial context in collaborative information seeking',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Chirag Shah, Roberto González-Ibáñez',
                'investigationAbstract' => "Space and time are considered the most important dimensions for studying systems and methods that support collaboration in information seeking. Several investigations have provided us with insights into people’s preferences and experiences relating to these two dimensions, but there is a lack of empirical evidence. A user study is presented, involving 60 subjects in 30 pairs, in which the experience and performance of users are compared while performing an information-seeking task in three different spatially defined collaboration settings: (1) working at the same workstation, (2) working in the same room at different workstations, and (3) working in different rooms. The results show significant differences among the experimental conditions, indicating the impact of space on collaboration. The pros and cons of different spatial set-ups are derived from an extensive analysis that uses several traditional information …",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Smile! Studying expressivity of happiness as a synergic factor in collaborative information seeking',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Roberto González‐Ibáñez, Chirag Shah, Natalia Córdova‐Rubio',
                'investigationAbstract' => "It is commonly expected that collaborative work will lead to better results than working individually. It has been demonstrated by some that teamwork is more than adding together the product of individual work, though this may depend on various factors such as time, space, the tasks or activities nature, as well as team members' personalities. To date, little is known about the specific elements that contribute to this synergic effect; however, some have argued that emotions, in particular positive ones, may have a fundamental role in teamwork. In this paper we take a closer look at users' smiles – as a way of expressing happiness‐ by studying how they participate in the information search process of both individuals and teams. We present a user study involving 30 participants (10 pairs and 10 individuals) and show how smiling contributes to the overall experience of team members as well as their performance in an …",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'An integrated review of emoticons in computer-mediated communication',
                'investigationYear' => '2017',
                'investigationAuthors' => 'Nerea Aldunate, Roberto González-Ibáñez',
                'investigationAbstract' => "Facial expressions constitute a rich source of non-verbal cues in face-to-face communication. They provide interlocutors with resources to express and interpret verbal messages, which may affect their cognitive and emotional processing. Contrarily, computer-mediated communication (CMC), particularly text-based communication, is limited to the use of symbols to convey a message, where facial expressions cannot be transmitted naturally. In this scenario, people use emoticons as paralinguistic cues to convey emotional meaning. Research has shown that emoticons contribute to a greater social presence as a result of the enrichment of text-based communication channels. Additionally, emoticons constitute a valuable resource for language comprehension by providing expressivity to text messages. The latter findings have been supported by studies in neuroscience showing that particular brain regions involved in emotional processing are also activated when people are exposed to emoticons. To reach an integrated understanding of the influence of emoticons in human communication on both socio-cognitive and neural levels, we review the literature on emoticons in three different areas. First, we present relevant literature on emoticons in CMC. Second, we study the influence of emoticons in language comprehension. Finally, we show the incipient research in neuroscience on this topic. This mini review reveals that, while there are plenty of studies on the influence of emoticons in communication from a social psychology perspective, little is known about the neurocognitive basis of the effects of emoticons on communication dynamics.",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Time and space in collaborative information seeking: The clash of effectiveness and uniqueness',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Roberto González‐Ibáñez, Muge Haseki, Chirag Shah',
                'investigationAbstract' => "Collaboration takes place at different time‐space conditions. Past research has shown that these two dimensions may have different implications in the collaboration process, as well as on its outcomes, depending upon the task being performed. In collaborative information seeking (CIS), as a relatively new topic in information science, little is known about the effects of different temporal‐spatial contexts. To address this, we conducted a user study involving 80 participants in 40 pairs, which were assigned to four experimental conditions, namely: co‐located, remotely located with text chat, remotely located with audio chat, and asynchronous. Using quantitative methods, we investigated the effects of these conditions on communication, information synthesis, productivity, and user experience. Results regarding the space dimension suggest that information seeking behaviors of co‐located users tend to overlap thus …",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A Performance-Based Test for Assessing Students’ Online Inquiry Competences in Schools',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Sormunen, E., González-Ibáñez, R., Kiili, C., Erdmann, N., Escobar-Macaya, M',
                'investigationAbstract' => "",
                'page_id' => 3,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'An integrated review of emoticons in computer-mediated communication',
                'investigationYear' => '2017',
                'investigationAuthors' => 'Aldunate, N., González-Ibáñez, R.',
                'investigationAbstract' => "",
                'page_id' => 3,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'NEURONE: oNlinE inqUiRy experimentatiON systEm',
                'investigationYear' => '2017',
                'investigationAuthors' => 'González-Ibáñez, R., Gacitúa, D., Sormunen, E., Kiili, C.',
                'investigationAbstract' => "",
                'page_id' => 3,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Two’s not always company: collaborative information seeking across task types',
                'investigationYear' => '2017',
                'investigationAuthors' => 'Shah, C., Hendahewa, C., González-Ibáñez, R.',
                'investigationAbstract' => "",
                'page_id' => 3,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Identification of nonliteral language in social media: A case study on sarcasm ',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Muresan, S., Gonzalez-Ibanez, R., Ghosh, D., Wacholder, N.',
                'investigationAbstract' => "",
                'page_id' => 3,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Rain or shine? Forecasting search process performance in exploratory search tasks',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Shah, C., Hendahewa, C., González-Ibáñez, R.',
                'investigationAbstract' => "",
                'page_id' => 3,
            ]
        );
        //Victor
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Optimization of electrical distribution feeders using simulated annealing',
                'investigationYear' => '2004',
                'investigationAuthors' => 'Victor Parada, Jacques A Ferland, Miguel Arias, Keith Daniels',
                'investigationAbstract' => "The planning of electrical power distribution systems strongly influences the supply of electrical power to consumers. The problem is to minimize both the investment cost for feeder and substations, and the power-loss cost. When the substations can already provide enough power flow, then the problem reduces to minimize the total cost related to the feeders and their power-loss. The difficulty of dealing with this problem increases rapidly with its size (i.e., the number of customers). It seems appropriate to use heuristic methods to obtain suboptimal solutions, since exact methods are too much time consuming. In this paper, a simulated annealing algorithm is used. A set of numerical results are provided.",
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A cross-cultural assessment of three theories of pro-environmental behavior: A comparison between business students of Chile and the United States',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Mark Cordano, Stephanie Welcomer, Robert F Scherer, Lorena Pradenas, Víctor Parada',
                'investigationAbstract' => "We surveyed business students in the United States (n = 256) and Chile (n = 310) to compare three theories of pro-environmental behavior.We examined Ajzen and Fishbein’s theory of reasoned action, Schawartz’s norm activation theory, and the values-beliefs-norms theory created by Stern, Dietz, Abel, Guagnano, and Kalof. We produced reliable measures for both samples. Each theory explained a significant amount of the variance in behavioral intention, although no theory clearly dominated for either the United States or Chile. However, among the variables included among these theories, the norms variable consistently produced the strongest relationship with behavioral intention. We discuss avenues of future research focusing on norms and more parsimonious combinations of the variables across these three theories.",
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Understanding cultural differences in the antecedents of pro-environmental behavior: A comparative analysis of business students in the United States and Chile',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Mark Cordano, Stephanie Welcomer, Robert Scherer, Lorena Pradenas, Victor Parada',
                'investigationAbstract' => "We surveyed business students in the U. S. (n = 256) and Chile (n = 310). The survey included measures drawn from studies of pro-environmental behavior using Schwartz's norm activation theory , the theory of reasoned action , and a values-beliefs-norms model created by . Our results show Chilean business students are more altruistic than business students in the United States and Chilean students felt stronger pressures from their peers to engage in pro-environmental behaviors. Chilean business students also expressed higher levels of awareness of environmental problems, a greater sense of obligation to protect the environment, a stronger willingness to limit property rights, and stronger intentions to engage in pro-environmental behavior.",
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Mitigation of greenhouse gas emissions in vehicle routing problems with backhauling',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Lorena Pradenas, Boris Oportus, VíCtor Parada',
                'investigationAbstract' => "In this paper, the decrease in the emission of greenhouse gases is evaluated using the vehicle routing problem with backhauls and time windows by considering the energy required for each route and estimating the load and distance between customers. Using a scatter search, problems from the literature with up to 100 randomly distributed customers were analyzed. Our results indicate that the distance traveled and the transportation costs increase as the required energy decreases, but the amount of fuel consumed also decreases; therefore, the emission of greenhouse gases also decreases. In some cases, the number of vehicles remains the same or increases because a better solution is achieved with shorter, better distributed routes. In addition, using a cooperative game approach, we found that different transportation companies operating jointly results in decreased emissions as well as operating costs.",
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A maturity model for assessing the use of ICT in school education',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Mauricio Solar, Jorge Sabattin, Victor Parada',
                'investigationAbstract' => "This article describes an ICT-based and capability-driven model for assessing ICT in education capabilities and maturity of schools. The proposed model, called ICTE-MM (ICT in School Education Maturity Model), has three elements supporting educational processes: information criteria, ICT resources, and leverage domains. Changing the traditional and exclusive focus on ICT, five Leverage Domains are defined: Educational Management, Infrastructure, Administrators, Teachers and Students. The Leverage Domains generate a hierarchical structure with a second level named Key Domain Areas. These areas should be measurable and controllable, so they are related to a third hierarchical level, called Critical Variables, allowing the model’s elements to be assessed qualitatively and quantitatively. The capability and maturity of these variables associated with the intersection with the other two elements establish …",
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Solution for the constrained guillotine cutting problem by simulated annealing',
                'investigationYear' => '1998',
                'investigationAuthors' => 'Victor Parada, Mauricio Sepúlveda, Mauricio Solar, Arlindo Gómes',
                'investigationAbstract' => "Since the Simulated Annealing method was identified as a useful tool for solving optimization problems, several applications have been made in order to study its performance in various problems. This method is especially adequate for problems in which, it is not possible to represent the whole domain of solutions through a set of algebraic equations. In this study the constrained two-dimensional cutting problem is formulated and solved. The formulation of this problem is based on the mapping of a cutting pattern on a binary tree, facilitating the random generation of neighbor solutions. A rigorous numerical analysis establishing the best set of parameters to solve any instance of the problem is accomplished. Further, we present a set of comparative results with other methods that also permit a solution to the problem.",
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'An evolutionary algorithm for the multi-objective pick-up and delivery pollution-routing problem',
                'investigationYear' => '2019',
                'investigationAuthors' => 'Bravo, M., Rojas, L.P., Parada, V.',
                'investigationAbstract' => "",
                'page_id' => 6,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Assessing the energy benefit of using a wind turbine micro-siting model',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Parada, L., Herrera, C., Flores, P., Parada, V.',
                'investigationAbstract' => "",
                'page_id' => 6,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Novel Methods Generated by Genetic Programming for the Guillotine-Cutting Problem',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Bertolini, V., Rey, C., Sepulveda, M., Parada, V.',
                'investigationAbstract' => "",
                'page_id' => 6,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Wind farm layout optimization using a Gaussian-based wake model',
                'investigationYear' => '2017',
                'investigationAuthors' => 'Parada, L., Herrera, C., Flores, P., Parada, V.',
                'investigationAbstract' => "",
                'page_id' => 6,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Automatic design of algorithms for the traveling salesman problem',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Loyola, C., Sepúlveda, M., Solar, M., Lopez, P., Parada, V.',
                'investigationAbstract' => "",
                'page_id' => 6,
            ]
        );
        //J.L
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A prototype question answering system using syntactic and semantic information for answer retrieval',
                'investigationYear' => '2002',
                'investigationAuthors' => 'Enrique Alfonseca, Marco De Boni, José-Luis Jara-Valencia, Suresh Manandhar',
                'investigationAbstract' => "This was our first entry at TREC and the system we presented was, due to time constraints, an incomplete prototype. Our main aims were to verify the usefulness of syntactic analysis for QA and to experiment with different semantic distance metrics in view of a more complete and fully integrated future system. To this end we made use of a part-of-speech tagger and NP chunker in conjunction with entity recognition and semantic distance metrics. We also envisaged experimenting with a shallow best first parser but time factors meant integration with the rest of the system was not achieved. Unfortunately due to time constraints no testing and no parameter tuning was carried out prior TREC. This in turn meant that a number of small bugs negatively influenced our results. Moreover it was not possible to carry out experiments in parameter tuning, meaning our system did not achieve optimal performance. Nevertheless we obtained reasonable results, the best score being 18.1% of the questions correct (with lenient judgements).",
                'page_id' => 7,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Regional differences in dynamic cerebral autoregulation in the healthy brain assessed by magnetic resonance imaging',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Mark A Horsfield, José L Jara, Nazia P Saeed, Ronney B Panerai, Thompson G Robinson',
                'investigationAbstract' => "A novel method is described for mapping dynamic cerebral blood flow autoregulation to assess autoregulatory efficiency throughout the brain, using magnetic resonance imaging (MRI). Global abnormalities in autoregulation occur in clinical conditions, including stroke and head injury, and are of prognostic significance. However, there is limited information about regional variations. A gradient-echo echo-planar pulse sequence was used to scan the brains of healthy subjects at a rate of 1 scan/second during a transient decrease in arterial blood pressure provoked by a sudden release of pressure in bilateral inflated thigh cuffs. The signal decrease and subsequent recovery were analyzed to provide an index of autoregulatory efficiency (MRARI). MRI time-series were successfully acquired and analyzed in eleven subjects. Autoregulatory efficiency was not uniform throughout the brain: white matter exhibited faster recovery than gray (MRARI = 0.702 vs. 0.672, p = 0.009) and the cerebral cortex exhibited faster recovery than the cerebellum (MRARI = 0.669 vs. 0.645, p = 0.016). However, there was no evidence for differences between different cortical regions. Differences in autoregulatory efficiency between white matter, gray matter and the cerebellum may be a result of differences in vessel density and vasodilation. The techniques described may have practical importance in detecting regional changes in autoregulation consequent to disease.",
                'page_id' => 7,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Dynamic cerebral autoregulation following acute ischaemic stroke: comparison of transcranial doppler and magnetic resonance imaging techniques',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Ronney B Panerai, Jose L Jara, Nazia P Saeed, Mark A Horsfield, Thompson G Robinson',
                'investigationAbstract' => "Novel MRI-based dynamic cerebral autoregulation (dCA) assessment enables the estimation of both global and spatially discriminated autoregulation index values. Before exploring this technique for the evaluation of focal dCA in acute ischaemic stroke (AIS) patients, it is necessary to compare global dCA estimates made using both TCD and MRI. Both techniques were used to study 11 AIS patients within 48 h of symptom onset, and nine healthy controls. dCA was assessed by the rate of return of CBFV (Rturn) following a sudden drop induced by the thigh cuff manoeuvre. No significant between-hemisphere differences were seen in controls using either the TCD or MRI technique. Inter-hemisphere averaged Rturn values were not different between TCD (1.89 ± 0.67%/s) and MRI (2.07 ± 0.60%/s) either. In patients, there were no differences between the affected and unaffected hemispheres whether assessed …",
                'page_id' => 7,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A new model-free index of dynamic cerebral blood flow autoregulation',
                'investigationYear' => '2014',
                'investigationAuthors' => 'Max Chacón, José Luis Jara, Ronney B Panerai',
                'investigationAbstract' => "The classic dynamic autoregulatory index (ARI), proposed by Aaslid and Tiecks, is one of the most widely used methods to assess the efficiency of dynamic cerebral autoregulation. Although this index is often used in clinical research and is also included in some commercial equipment, it exhibits considerable intra-subject variability, and has the tendency to produce false positive results in clinical applications. An alternative index of dynamic cerebral autoregulation is proposed, which overcomes most of the limitations of the classic method and also has the advantage of being model-free. This new index uses two parameters that are obtained directly from the response signal of the cerebral blood flow velocity to a transient decrease in arterial blood pressure provoked by the sudden release of bilateral thigh cuffs, and a third parameter measuring the difference in slope of this response and the change in arterial blood pressure achieved. With the values of these parameters, a corresponding classic autoregulatory index value could be calculated by using a linear regression model built from theoretical curves generated with the Aaslid-Tiecks model. In 16 healthy subjects who underwent repeated thigh-cuff manoeuvres, the model-free approach exhibited significantly lower intra-subject variability, as measured by the unbiased coefficient of variation, than the classic autoregulatory index (p = 0.032) and the Rate of Return (p<0.001), another measure of cerebral autoregulation used for this type of systemic pressure stimulus, from 39.23%±41.91% and 55.31%±31.27%, respectively, to 15.98%±7.75%.",
                'page_id' => 7,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Crisp classifiers vs. fuzzy classifiers: A statistical study',
                'investigationYear' => '2009',
                'investigationAuthors' => 'JL Jara, Rodrigo Acevedo-Crespo',
                'investigationAbstract' => "A study is made of whether there is a significant statistical difference in performance between crisp and fuzzy rule-based classification. To do that, 12 datasets were chosen from the UCI repository that are widely used in the literature, and use was made of four different algorithms for rule induction —two crisp and two fuzzy— to classify them. Then a non-parametric statistical test was used for measuring the significance of the results, which indicated that both paradigms —crisp and fuzzy classification— are not different in the statistical meaning.",
                'page_id' => 7,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Empirical evaluation of three machine learning method for automatic classification of neoplastic diagnoses',
                'investigationYear' => '2011',
                'investigationAuthors' => 'José Luis Jara, Max Chacón, Gonzalo Zelaya',
                'investigationAbstract' => "Diagnoses are a valuable source of information for evaluating a health system. However, they are not used extensively by information systems because diagnoses are normally written in natural language. This work empirically evaluates three machine learning methods to automatically assign codes from the International Classification of Diseases (10th Revision) to 3,335 distinct diagnoses of neoplasms obtained from UMLS®. This evaluation is conducted on three different types of preprocessing. The results are encouraging: a well-known rule induction method and maximum entropy models achieve 90% accuracy in a balanced cross-validation experiment.",
                'page_id' => 7,
            ]
        );
        //Scopus
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Reproducibility of dynamic cerebral autoregulation parameters: a multi-centre, multi-method study',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Sanders, M.L., Claassen, J.A.H.R., Aries, M., Panerai, R.B., Elting, J.W.J.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Increasing the contrast-to-noise ratio of MRI signals for regional assessment of dynamic cerebral autoregulation',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Jara, J.L., Saeed, N.P., Panerai, R.B., Robinson, T.G.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Comparing models of spontaneous variations, maneuvers and indexes to assess dynamic cerebral autoregulation',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Chacón, M., Noh, S.-H., Landerretche, J., Jara, J.L.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Non-linear models for the detection of impaired cerebral blood flow autoregulation',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Chacón, M., Jara, J.L., Miranda, R., Katsogridakis, E., Panerai, R.B.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Dynamic cerebral autoregulation following acute ischaemic stroke: Comparison of transcranial Doppler and magnetic resonance imaging techniques',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Panerai, R.B., Jara, J.L., Saeed, N.P., Horsfield, M.A., Robinson, T.G.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Analysis of the influence of systemic and intracranial pressure in patients with severe head injury using linear and non-linear models',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Chacón, M., Jara, J.L., Varas, N., Panerai, R.B.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A new model-free index of dynamic cerebral blood flow autoregulation',
                'investigationYear' => '2014',
                'investigationAuthors' => 'Chacón, M., Jara, J., Panerai, R.B.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Regional Differences in Dynamic Cerebral Autoregulation in the Healthy Brain Assessed by Magnetic Resonance Imaging',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Horsfield, M.A., Jara, J.L., Saeed, N.P., Panerai, R.B., Robinson, T.G.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Empirical evaluation of three machine learning method for automatic classification of neoplastic diagnoses | [Evaluación empírica de tres métodos de aprendizaje automático para clasificar automáticamente diagnósticos de neoplasias]',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Jara, J.L., Chacón, M., Zelaya, G.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Crisp classifiers vs. fuzzy classifiers: A statistical study',
                'investigationYear' => '2009',
                'investigationAuthors' => 'Jara, J.L., Acevedo-Crespo, R.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
    }
}