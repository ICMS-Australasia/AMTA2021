<?php
$title = "Conference Program";
include('include/header.php');
?>

<div class="row mb-5 program-buttons">
    <div class="col px-1"><button type="button" class="w-100 py-3" name="button" onclick="program(sunday8)">Sunday 8</button></div>
    <div class="col px-1"><button type="button" class="w-100 py-3" name="button" onclick="program(tuesday10)">Tuesday 10</button></div>
    <div class="col px-1"><button type="button" class="w-100 py-3" name="button" onclick="program(wednesday11)">Wednesday 11</button></div>
    <div class="col px-1"><button type="button" class="w-100 py-3" name="button" onclick="program(thursday12)">Thursday 12</button></div>
    <div class="col px-1"><button type="button" class="w-100 py-3" name="button" onclick="program(saturday14)">Saturday 14</button></div>
    <div class="col px-1"><button type="button" class="w-100 py-3" name="button" onclick="program(sunday15)">Sunday 15</button></div>
</div>

<div id="program">

</div>

<script type="text/javascript">
    let sunday8 = {
        "title": "Full Program - Sunday 8 November",
        "html": `<table cellpadding="20" cellspacing="0" border="1" width="100%" class="full-program">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <tr valign="top">
                <td align="center"><b>9:30am – 10:00am</b></td>
                <td align="center" colspan="4" bgcolor="#e0e0e0"><b>Welcome to Country & opening session</b></td>
            </tr>
            <tr valign="top">
                <td align="center"><b>10:00am – 11:30am</b></td>
                <td colspan="4" class="pink">Keynote: Building connections: Radical imaginations in music therapy <br>
                    <b>Dr Marisol Norris</b></td>
            </tr>
            <tr valign="top">
                <td align="center"><b>11.30am – 12:00pm</b></td>
                <td bgcolor="#e0e0e0" colspan="4" align="center"><b>Networking and coffee break</b></td>
            </tr>
            <tr valign="top">
                <td align="center" rowspan="2"><b>11.30am – 12:00pm</b></td>
                <td class="green">Paper: Telehealth in the time of COVID 19- reflections on providing group music therapy online for people with intellectual and developmental disabilities <br>
                    <b>Helen Cameron</b></td>
                <td class="blue" rowspan="2">Perspectives: Responding to families’ needs: reflections on the factors that allow families to engage in Sing & Grow’s innovative alternate service delivery options <br>
                    <b>Jessica Higgins-Anderson & Lorna Berry</b></td>
                <td class="green">Paper: Music Therapy and NDIS planning in a sub-acute hospital setting: A case study about the role of the music therapist in supporting an adult patient’s transition from hospital to community following neuro-rehabilitation <br>
                    <b>Carena Khoo</b></td>
                <td class="orange" rowspan="2">Panel: Moving forward as a profession: Understanding the Music Therapists experience of unconscious bias <br>
                    <b>Tanya Silveira (Moderator), Delphine Geia, Asami Koike & Mai Abe </b></td>
            </tr>
            <tr valign="top">
                <td class="green">Paper: Collaboratively designing autism-friendly music making workshops to support social connection <br>
                    <b>Dr Grace Thompson</b></td>
                <td class="green">Paper: Carers Count <br>
                    <b>Jessica Archbold</b></td>
            </tr>
            <tr valign="top">
                <td align="center"><b>1:00pm – 2:00pm</b></td>
                <td bgcolor="#e0e0e0" colspan="4" align="center"><b>Networking and lunch break</b></td>
            </tr>
            <tr valign="top">
                <td align="center" rowspan="3"><b>2:00pm – 3:30pm</b></td>
            	<td class="green">Paper: Connecting parents and their children through online music groups: Affordances and constraints in the face of crisis <br>
                    <b>Dr Vicky Abad</b></td>
                <td class="green">Paper: I thought CYMHS was someone called Kim: Young peoples’ lived experiences of mental health assessment and suggestions for music therapy assessment in a Child and Youth Mental Health Service <br>
                    <b>Kate Aitchison</b></td>
            	<td class="red" rowspan="3">Masterclass: Connecting research to practice: The future of music therapy <br>
                    <b>Professor Katrina Skewes McFerran</b></td>
                <td class="green">Paper: Using of music and music therapy to address anxiety for women undergoing gynaecological and fertility treatments <br>
                    <b>Alison Short & Natasha Andreadis</b></td>
            </tr>
            <tr valign="top">
                <td class="green">Paper: From Lullabies to Life: An Evolving Therapeutic Connection with a Preterm Infant and his Parents <br>
                    <b>Verena Clemencic Jones</b></td>
                <td class="blue" rowspan="2">Perspectives: With a Little Help From My Friends: Collaboration between a Music Therapist and a Social Worker at an adolescent mental health inpatient unit <br>
                    <b>Joanne McIntyre</b></td>
                <td class="orange" rowspan="2">Panel: Queer Theory and Coming Out Stories: Making Connections between Australia and the US <br>
                    <b>Annette Whitehead-Pleaux & Dr Michele Forinash</b></td>
            </tr>
            <tr valign="top">
                <td class="green">Paper: Reflecting on the role of the Music Therapist in Infant Mental Health <br>
                    <b>Louise Miles</b></td>
            </tr>
            <tr valign="top">
                <td align="center"><b>3:30pm – 3:45pm</b></td>
                <td bgcolor="#e0e0e0" colspan="4" align="center"><b>Networking and coffee break</b></td>
            </tr>
            <tr valign="top">
                <td align="center" valign=""><b>3:45pm – 5:00pm</b></td>
                <td colspan="2" class="purple">Leaders in Conversation: Advocacy in Music Therapy <br>
                    <b>Dr Vicky Abad & Allison Davies</b></td>
                <td colspan="2" class="purple">Leaders in Conversation: Music Therapy with Hospitalised Children, Adolescents, and their Families in 2020 <br>
                    <b>Dr Helen Shoemark & Priscilla Pek</b></td>
            </tr>
        </table>`
    };
    tuesday10 = {
        "title": "Full Program - Tuesday 10 November",
        "html":`
        <table cellpadding="20" cellspacing="0" border="1" width="100%" class="full-program">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <tr valign="top">
                <td align="center" rowspan="3"><b>7:00pm – 8:30pm</b></td>
                <td class="green">Paper: Adapting, creating and implementing online resources: How to support clients to connect, communicate and engage in Telehealth Music Therapy during a global pandemic <br>
                    <b>Nerida Taylor</b></td>
                <td class="green">Paper: Creating lasting connections: Reflections on experiences of music therapy at the end of a child’s life <br>
                    <b>Roxanne McLeod</b></td>
                <td class="red" rowspan="3">Masterclass: Collaborative Songwriting Online <br>
                    <b>Carlin Mclellan</b></td>
                <td class="green" >Paper: Connecting practice with standards: reflections on a survey of music therapy effectiveness in a multi-population clinic setting <br>
                <b>Joe Thompson</b></td>
            </tr>
            <tr valign="top">
                <td class="green">Paper: As Batten’s Disease disconnects, music therapy connects (A case study) <br>
                    <b>Dave Anthony & Matthew Breaden</b></td>
                <td class="green">Paper: Singing With Grief: Accepting your own grief in the facilitation process of group singing <br>
                    <b>Kate Fletcher</b></td>
                <td class="orange" rowspan="2">Panel: Mapping pathways to connection for music therapists during and after COVID-19 <br>
                    <b>Minky van der Walt (Moderator), Bolette Beck, Ruth Langford & Andrea Phelps</b></td>
            </tr>
            <tr valign="top">
                <td class="green">Paper: The Transformation of Entrainment: Online Co-therapy During Lockdown <br>
                    <b>Annabelle Keevers & Gy Wen Ho</b></td>
                <td class="green">Paper: An Original Musical Drama by a Community of Survivors: A Case of Disaster Trauma Alleviation through Music Intervention <br>
                    <b>Alegria Ferrer</b></td>
            </tr>
        </table>`
    };
    wednesday11 = {
        "title": "Full Program - Wednesday 11 November",
        "html":`
        <table cellpadding="20" cellspacing="0" border="1" width="100%" class="full-program">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <tr valign="top">
                <td align="center" rowspan="3"><b>7:00pm – 8:30pm</b></td>
                <td class="green">Paper: PROJECT-CONNECT: Keeping New Grad RMTs Connected Through a Global Pandemic <br>
                    <b>Lauren Khalil-Salib</b></td>
                <td class="green">Paper: Singing, Songwriting, and Synchrony through Screens: Adapting methods and developing meaningful therapeutic rapport within a short-term telehealth music therapy program <br>
                    <b>Brede Davis</b></td>
                <td class="red" rowspan="3">Masterclass: Connecting in and reaching out: evolving with nurture, knowledge and support through COVID-19 <br>
                    <b>Minky van der Walt</b></td>
                <td class="green">Paper: Who Are You…Who Who, Who Who: Exploring Identity Through Music Therapy with Young People at The Forensic Hospital, Sydney <br>
                    <b>Joanne McIntyre</b></td>
            </tr>
            <tr valign="top">
                <td class="green">Paper: Recovering connections: The power of persistence and collaboration during telehealth music therapy <br>
                    <b>Lisa Dowling</b></td>
                <td class="green">Paper: An exploration into the use of music therapy to improve holistic health, wellbeing and community of support for persons living with Diabetes <br>
                    <b>Phoebe Thompson-Star</b></td>
                <td class="orange" rowspan="2">Panel: Utilisation of the Connected Music Therapy Teleintervention Approach (CoMTTA) with diverse populations during Covid19 <br>
                    <b>Allison Fuller (Moderator), Roxanne McLeod, Rachel Mackay & Sydney-Rella Pihema</b></td>
            </tr>
            <tr valign="top">
                <td class="green">Paper: "Can you hear me?": Navigating the 'expert model' and power dynamics created by technological facilitation in telehealth music therapy <br>
                    <b>James Wheller</b></td>
                <td class="green">Paper: Connecting the generations during unprecedented times <br>
                    <b>Heidi Hutchison</b></td>

            </tr>
        </table>`
    };
    thursday12 = {
        "title": "Full Program - Thursday 12 November",
        "html":`
        <table cellpadding="20" cellspacing="0" border="1" width="100%" class="full-program">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <tr valign="top">
                <td align="center" rowspan="3"><b>7:00pm – 8:30pm</b></td>
                <td class="green">Paper: Music Therapy Sessions and the Cello - A case study <br>
                    <b>Michael McInerney</b></td>
                <td class="green">Paper: "Virtual Wise Wellness": online day program for older adults who suffer from mental health problems, an integrative therapeutic approach <br>
                    <b>Vannie Ip-Winfield & Jedda Tomkins</b></td>
                <td class="red" rowspan="3">Masterclass: Developing and adapting music therapy assessment tools <br>
                    <b>Dr Gustavo Gattino</b></td>
                <td>Session TBA</td>
            </tr>
            <tr valign="top">
                <td class="green">Paper: If my heart was wood, I'd set it on fire: Connecting to an adolescent's emotional world via songwriting collaborations <br>
                    <b>Verena Clemencic-Jones</b></td>
                <td class="green">Paper: Remaining connected: Reflections of a music therapy team during a global pandemic <br>
                    <b>Kate Fletcher</b></td>
                <td class="orange" rowspan="2">Panel: Cancer Care in a Covid-19 Context <br>
                    <b>Penelope Sanderson (Moderator) & Kate McMahon</b></td>
            </tr>
            <tr valign="top">
                <td class="green">Paper: Reflections on adapting and creating in online music therapy spaces during COVID19 – perspectives from two music therapists and NDIS participants in an online music therapy group <br>
                    <b>Zara Thompson & Lauren Khalil-Salib</b></td>
                <td class="green">Paper: The use of visual supports by Registered Music Therapists (RMTs): Survey results that address the why, who, what and how <br>
                    <b>Allison Fuller</b></td>
            </tr>
        </table>`
    };
    saturday14 = {
        "title": "Full Program - Saturday 14 November",
        "html":`
        <table cellpadding="20" cellspacing="0" border="1" width="100%" class="full-program">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <tr valign="top">
                <td align="center"><b>9:30am – 10:45am</b></td>
                <td class="purple" colspan="4">Leaders in Conversation: Indigenous and Diasporic Perspectives on Trauma <br>
                    <b>Emeritus Professor Judy Atkinson & Asami Koike</b></td>
            </tr>
            <tr valign="top">
                <td align="center"><b>10:45am – 11:00am</b></td>
                <td bgcolor="#e0e0e0" colspan="4" align="center"><b>Networking and coffee break</b></td>
            </tr>
            <tr valign="top">
                <td align="center" rowspan="2"><b>11:00am – 12:30pm</b></td>
                <td class="green">Paper: Responsive research design: A collaborative reflection on listening to and learning from people with lived experience of dementia, their families and supporters <br>
                    <b>Phoebe Stretton-Smith, Zara Thompson & Kate McMahon</b></td>
                <td class="green">Paper: Music therapy-informed webinars: Evolving beyond traditional therapy models? <br>
                    <b>Professor Katrina Skewes McFerran</b></td>
                <td class="red" rowspan="2">Masterclass: Going Deeper in DAWs - Digital composition and production for music therapists <br>
                    <b>Cameron Haigh</b></td>
                <td class="green">Paper: Music students' ambient music-making for active listening over the broadcasting media <br>
                    <b>Dr Lee Cheng</b></td>
            </tr>
            <tr valign="top">
                <td class="orange">Panel: Deliberate resilience through collective reasoning: Peer support at the management level <br>
                    <b>Dr Helen Shoemark (Moderator), David Knott, Debbie Bates, Elizabeth Harman, Amy Thomas, Ann Hannan, Amy Troyano & Beth Collier</b></td>
                <td class="green">Roundtable: Keeping people connected during a pandemic: Music therapy research and practice goes online <br>
                    <b>Professor Felicity Baker, Jeanette Tamplin, Imogen Clark, Libby Flynn, Kate Teggelove, Zara Thompson, Hayley Miller & Kate McMahon</b>
                    <br> <br>
                    <b>Paper 1:</b> Music Therapy Telehealth practices in Australia
                    <br> <br>
                    <b>Paper 2:</b> Redesigning the Homeside family carer training to be delivered online
                    <br> <br>
                    <b>Paper 3:</b> Therapeutic Choirs in the virtual world</td>
                <td class="blue">Perspectives: Changes: Discussing sound and vision in Music Therapy with a new grad and a senior music therapist <br>
                     <b>Joanne McIntyre & Netta Dor</b></td>
            </tr>
            <tr valign="top">
                <td align="center"><b>12:30pm – 1:30pm</b></td>
                <td bgcolor="#e0e0e0" colspan="4" align="center"><b>Networking and lunch break</b></td>
            </tr>
            <tr valign="top">
                <td align="center"><b>1:30pm – 2:30pm</b></td>
                <td class="orange">Panel: Reflecting on how it all happened: Enablers and challenges for music therapy training in the time of COVID <br>
                    <b>Alison Short (Moderator & Panellist), Allison Fuller & Kate Penson</b></td>
                <td class="blue">Perspectives: Telerehab Palliative Joint Music and Art Therapy Session <br>
                    <b>Isabel Tan & Lee Sze-Chin</b></td>
                <td class="green">Roundtable: Music therapists with lived experience of disability, neurodivergence, and chronic physical and mental health conditions: Reflecting on connections within and beyond our professional identity <br>
                    <br> <br>
                    Paper 1: Building pride in a community of RMTs with lived experience <br>
                    <b>Sarah Curtain (presentation coordinator), Dr Grace Thomspon, Allison Davies & Ben McKenzie</b>
                    <br> <br>
                    Paper 2: Reflections on access issues in music therapy training for students with lived experience <br>
                    <b>Brede Davis (presentation coordinator), Zoë Kalenderidis & Megan Murray</b>
                    <br> <br>
                    Paper 3: Introducing the Post-Ableist Collective (PAC) in celebration of diverse health identities within the music therapy profession <br>
                    <b>Carolyn Ayson (presentation coordinator), Grace Thompson &  Zoë Kalenderidis</b></td>
                <td class="orange">Panel: Stroke survival and rehabilitation <br>
                    <b>Tanya Silveira</b></td>
            </tr>
            <tr valign="top">
                <td align="center"><b>2:30pm – 2:45pm</b></td>
                <td bgcolor="#e0e0e0" colspan="4" align="center"><b>Networking and coffee break</b></td>
            </tr>
            <tr valign="top">
                <td align="center"><b>2:45pm – 3:45pm</b></td>
                <td class="orange">Panel: Connection within Acute Adolescent Mental Health <br>
                    <b>Ali Blundell (Moderator), Jenna Murphy, Emma Fitzgerald & Catherine Garner</b></td>
                <td class="blue">Perspectives: Is connection enough? Can community musicians be effective replacements for music therapists in community settings? <br>
                    <b>Joe Thompson & Adam Van Eyk</b></td>
                <td class="green">Roundtable: Evolving, Reflecting, Responding: Sing&Grow’s Lessons From COVID <br>
                    <br> <br>
                    <b>Paper 1:</b> Evolving - A reimagining of Sing&Grow in response to COVID-19 <br>
                    <b>Jessica Higgins-Anderson</b>
                    <br> <br>
                    <b>Paper 2:</b> Reflecting - From resilience to unforeseen challenges: pivoting and adapting to changes in delivery <br>
                    <b>Lorna Berry</b>
                    <br> <br>
                    <b>Paper 3:</b> Responding - Looking forward <br>
                    <b>Julia Oreopoulos</b> </td>
                <td class="orange">Panel: Musical engagement through healthy ageing, cognitive impairment and dementia <br> <br>
                    <b>Pete McDonald, Matt Sutcliffe, Anita Connell & Dementia Australia Representative</b></td>
            </tr>
        </table>`
    };
    sunday15 = {
        "title": "Full Program - Sunday 15 November",
        "html":`
        <table cellpadding="20" cellspacing="0" border="1" width="100%" class="full-program">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <col width="20%">
            <tr valign="top">
                <td align="center"><b>10:00am – 11:30am</b></td>
                <td class="pink" colspan="4">Keynote: The Urgency for Sociocultural Reflexivity in Music Therapy <br>
                    <b>Professor Susan Hadley</b></td>
            </tr>
            <tr valign="top">
                <td align="center"><b>11:30am – 12:00pm</b></td>
                <td bgcolor="#e0e0e0" colspan="4" align="center"><b>Networking and coffee break</b></td>
            </tr>
            <tr valign="top">
                <td align="center"><b>12:00pm – 1:15pm</b></td>
                <td colspan="2" class="purple">Leaders in Conversation: Pursuing Decolonisation and Self-Determination in Therapeutic Practice <br>
                    <b>Sue-Anne Hunter & Special Guest</b></td>
                <td colspan="2" class="purple">Leaders in Conversation: Contemporary Understandings of Music and Neuroscience <br>
                    <b>Professor Dale Taylor & Professor Jörg Fachner</b></td>
            </tr>
            <tr valign="top">
                <td align="center"><b>1:15pm – 2:15pm</b></td>
                <td bgcolor="#e0e0e0" colspan="4" align="center"><b>Networking and lunch break</b></td>
            </tr>
            <tr valign="top">
                <td align="center"><b>2:15pm – 3:15pm</b></td>
                <td colspan="2" class="yellow">PechaKucha Stream 1
                    <br><br>
                    Sing&Grow 2019 Evaluation Project <br>
                    <b>Jessica Higgins-Anderson</b>
                    <br><br>
                    Findings from the Rhythm & Movement for Self-Regulation (RAMSR) RCT: Connecting early years teachers to music therapy principles <br>
                    <b>Dr Kate Williams</b>
                    <br><br>
                    The Possibilities of Group Singing Online <br>
                    <b>Kate Fletcher</b>
                    <br><br>
                    Musical Attention Control Training for Schizophrenia <br>
                    <b>Cameron Haigh</b></td>
                <td colspan="2" class="yellow">PechaKucha Stream 2
                    <br><br>
                    The Evolution of Intergen: A New Grads' View <br>
                    <b>Soya Thippawal & Catherine Vesic</b>
                    <br><br>
                    Song Creation- a strength based tool to build expressive confidence <br>
                    <b>Ann Lehmann-kuit</b>
                    <br><br>
                    Designing for different ways of knowing: Arts-Based Research in Dementia <br>
                    <b>Kate McMahon</b>
                    <br><br>
                    Exploring the use of music as an intervention in perinatal mental health: a systematic approach based on literature <br>
                    <b>Greer Boutling</b>
                    <br> <br>
                    Crucial connections: Reflections on the role of the Support Worker in group music therapy <br>
                    <b>Helen Cameron</b>

                    </td>
            </tr>
        </table>`
    };
    function program(day) {
        let table = document.getElementById('program');
        let title = document.getElementsByTagName('H1');
        table.innerHTML = day.html;
        title[0].innerText = day.title;
    }
    program(sunday8);
</script>


<?php
include('include/footer.php');
?>
