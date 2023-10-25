<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to Thariq Agfi's Website</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Poppins";
        }

        #navbar {
            padding: 20px;
            background-color: black;
            position: relative;
            z-index: 1;
            box-shadow: 50px;
        }

        .nav {
            text-decoration: none;
            width: fit-content;
            color: white;
            font-weight: bold;
            --s: 0.1em;
            /* the thickness of the line */
            --c: #1095c1;
            /* the color */
            padding-bottom: var(--s);
            background:
                linear-gradient(90deg, var(--c) 50%, #000 0) calc(100% - var(--_p, 0%))/200% 100%,
                linear-gradient(var(--c) 0 0) 0% 100%/var(--_p, 0%) var(--s) no-repeat;
            -webkit-background-clip: text, padding-box;
            background-clip: text, padding-box;
            transition: 0.5s;
        }

        .nav:hover {
            color: rgb(222, 215, 215);
            --_p: 100%;
        }

        .pas-foto {
            -webkit-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            -moz-filter: grayscale(100%);
            filter: grayscale(100%);
            position: relative;
            z-index: 0;
        }

        .pas-foto:hover {
            -webkit-filter: none;
            -ms-filter: none;
            -moz-filter: none;
            filter: none;
        }

        #hero {
            height: 90vh;
            background-color: white;
            padding-top: 3%;
            text-align: center;
            padding-left: 5%;
            padding-right: 5%;
        }

        .section {
            /* height: 10vh; */
            text-align: justify;
            margin-top: 30px;
            padding-left: 10%;
            padding-right: 10%;
        }

        .list {
            font-size: smaller;
        }

        .date {
            text-align: end;
        }

        .hover {
            color: #0000;
            background:
                linear-gradient(90deg, #1095c1 50%, #000 0) var(--_p, 100%)/200% no-repeat;
            -webkit-background-clip: text;
            background-clip: text;
            transition: .4s;
            text-decoration-line: underline;
            cursor: pointer;
        }

        .hover:hover {
            --_p: 0%;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: black;
            color: white;
            margin-top: 50px;
            font-size: smaller;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <table aria-colcount="10" id="navbar" style="position: fixed;" width="100%">
        <tr>
            <td><a href="#hero" class="nav" style="padding-right:50px;">Agfi's ATS CV</a></td>
            <td><a class="nav" colspa href="#about">About</a></td>
            <td><a class="nav" href="#education">Education</a></td>
            <td><a class="nav" href="#experience">Experience</a></td>
            <td><a class="nav" href="#organization">Organization</a></td>
            <td><a class="nav" href="#skills">Skills</a></td>
        </tr>
    </table>

    <!-- HERO -->
    <table id="hero" width="100%">
        <tr>
            <td>
                <img src="agfi.jpeg" alt="pas-foto" width="300px" class="pas-foto">
            </td>
            <td>
                <h1 class="hover">Thariq Agfi Hermawan</h1>
                <p class="hover">Informatics Engineering - Sepuluh Nopember Institute of Technology</p>
                <p style="padding-top: 30px;">GitHub : <a href="http://github.com/thoriqagfi" target="_blank" rel="noopener noreferrer" class="hover" style="color: darkslategray;">thoriqagfi</a></p>
                <p>+6285157871266</p>
                <p>LinkedIn : <a href="http://linkedin.com/in/thariqagfihermawan" target="_blank" rel="noopener noreferrer" class="hover">Thariq Agfi Hermawan</a></p>
            </td>
        </tr>
    </table>

    <!-- ABOUT ME -->
    <table id="about" class="section" width="100%" style="padding-top: 10px;">
        <tr>
            <td>
                <h1 class="hover">About Me</h1>
            </td>
        </tr>
        <tr>
            <td>
                <p class="hover">Freshman Bachelor's degree Student which focused in Informatics Engineering from Sepuluh Nopember Institute of Technology. Highly interested in Front-End Web Development, Data Science, Machine Learning, and Mobile Development with several Certifications. Disciplined and ambitious person with a great
                    motivation.</p>
            </td>
        </tr>
    </table>

    <!-- EDUCATION -->
    <table id="education" class="section" width="100%" style="padding-top: 10px;">
        <tr>
            <td>
                <h1 class="hover">Education</h1>
            </td>
        </tr>
        <tr class="hover">
            <td>
                <p style="font-weight: bold;">Sepuluh Nopember Institute of Technology <span style="font-weight: normal;">- Surabaya, Indonesia</span></p>
            </td>
            <td class="date">Jul 2021 - Jun 2025</td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>Bachelor's Degree in Informatics Engineering</p>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Awardee KSE 2022/2023 Scholarship</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Runner Up Software Development - IS Competition 2022</li>
            </td>
        </tr>
        <tr class="hover">
            <td>
                <p style="font-weight: bold; padding-top: 20px;">SMA Negeri 55 Jakarta <span style="font-weight: normal;">- Jakarta, Indonesia</span></p>
            </td>
            <td class="date">Jul 2017 - Jun 2020</td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Staff Equipment Divsion - SNAPFEST 2019</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Project Officer - OFORTY 2018</li>
            </td>
        </tr>
    </table>

    <!-- EXPERIENCE -->
    <table id="experience" class="section" width="100%" style="padding-top: 10px;">
        <tr>
            <td>
                <h1 class="hover">Experience</h1>
            </td>
        </tr>
        <tr class="hover">
            <td>
                <p style="font-weight: bold;">Mataram Partners <span style="font-weight: normal;">- Jakarta, Indonesia</span></p>
            </td>
            <td class="date">Apr 2022 - Aug 2022</td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>IT Support Freelance</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="color: gray;" class="list">Mataram partners is an Indonesian law firm specialising in foreign investor services in Indonesia</p>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Manage and solving company staff on IT Trouble</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Manage company server between Windows Server and Synology</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Manage Software as a Service (SaaS) using Microsoft 365</li>
            </td>
        </tr>

        <tr class="hover">
            <td>
                <p style="font-weight: bold; padding-top: 20px;">Mabit NF 2022<span style="font-weight: normal;">- Jakarta, Indonesia</span></p>
            </td>
            <td class="date">Dec 2021 - Mar 2022</td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>FrontEnd Developer</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="color: gray;" class="list">Mabit NF is an educational non profit organization</p>
            </td>
        </tr>

        <tr class="hover">
            <td>
                <p style="font-weight: bold; padding-top: 20px;">ITS Online <span style="font-weight: normal;">- Surabaya, Indonesia</span></p>
            </td>
            <td class="date">Oct 2021 - <span style="font-weight: bold;">Present</span></td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>Journalist Internship</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="color: gray;" class="list">ITS Online, part of ITS Media Center, is an News Media from Sepuluh Nopember Institute of Technology</p>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Writing 6 hard news or soft news monthly</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Writing features and design magazine news</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Part of Y-ITS 125 and ITS Point 2022 magazine</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Branding Staff, design feeds and content</li>
            </td>
        </tr>

        <tr class="hover">
            <td>
                <p style="font-weight: bold; padding-top: 20px;">Schematics <span style="font-weight: normal;">- Surabaya, Indonesia</span></p>
            </td>
            <td class="date">Oct 2021 - <span style="font-weight: bold;">Present</span></td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>FrontEnd Developer</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="color: gray;" class="list">Schematics stands for NST, Art Exhibition, NLC, NPC, and REEVA. Schematics is an annual event organized by ITS Informatics Engineering students</p>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Build website with Agile Development</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Building Website using HTML, CSS, ReactJS, NextJS, ReactTable, and Tailwind CSS</li>
            </td>
        </tr>

        <tr class="hover">
            <td>
                <p style="font-weight: bold; padding-top: 20px;">MABACUP <span style="font-weight: normal;">- Surabaya, Indonesia</span></p>
            </td>
            <td class="date">Jul 2022 - Dec 2022</td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>Head of Web Development</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="color: gray;" class="list">Maba Cup is an annual event organized by the Event Department of the ITS Talent Interest Institute</p>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Build website with Agile Development</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Building Website using HTML, CSS, ReactJS, NextJS, ReactTable, and Tailwind CSS</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Building Dashboard Open Recruitment Staff MABACUP 2022</li>
            </td>
        </tr>

        <tr class="hover">
            <td>
                <p style="font-weight: bold; padding-top: 20px;">Electics Faculty <span style="font-weight: normal;">- Surabaya, Indonesia</span></p>
            </td>
            <td class="date">Apr 2022 - Aug 2022</td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>Public Relation Internship</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="color: gray;" class="list">ELECTICS ITS Faculty comes with a vision to become a referral faculty in education and research in electrical, electronics, and technology</p>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Writing news articles</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Manage electics faculty website with Wordpress</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Manage KRI 2022 website with Wordpress</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Skills: Wordpress Elementor and Content Writing</li>
            </td>
        </tr>

        <tr class="hover">
            <td>
                <p style="font-weight: bold; padding-top: 20px;">Ini Lho ITS! <span style="font-weight: normal;">- Surabaya, Indonesia</span></p>
            </td>
            <td class="date">Oct 2022 - Feb 2023</td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>DevOps Staff</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="color: gray;" class="list">Ini Lho ITS! is one of biggest event in ITS that introducing ITS into society</p>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Handling developers bugs and errors</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Review developers commits</li>
            </td>
        </tr>

        <tr class="hover">
            <td>
                <p style="font-weight: bold; padding-top: 20px;">ITS EXPO <span style="font-weight: normal;">- Surabaya, Indonesia</span></p>
            </td>
            <td class="date">Dec 2022 - <span style="font-weight: bold;">Present</span></td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>Vice Head of Development</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="color: gray;" class="list">ITS EXPO is the Biggest event in ITS that accomodating ITS entire academic to show art and achievements</p>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Responsible for Project Management on GitHub</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Responsible for FrontEnd Development Features</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Tech Stack : TypeScript, TailwindCSS, Agile Scrum Development</li>
            </td>
        </tr>

        <!-- PPDB Surabaya  -->
        <tr class="hover">
            <td>
                <p style="font-weight: bold; padding-top: 20px;">PPDB Surabaya <span style="font-weight: normal;">- Surabaya, Indonesia</span></p>
            </td>
            <td class="date">Mar 2023 - <span>Jul 2023</span></td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>FrontEnd Engineer</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="color: gray;" class="list">PPDB Surabaya is a new student admission process organized by the Surabaya City Education Department.</p>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Responsible to handle flow registration and announcement students</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Modular Programming and Clean Architecture</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Tech Stack : Typescript, ReactJS, Bootstrap, TailwindCSS, Redux State Management</li>
            </td>
        </tr>

        <!-- Mechanical City -->
        <tr class="hover">
            <td>
                <p style="font-weight: bold; padding-top: 20px;">Mechanical City ITS <span style="font-weight: normal;">- Surabaya, Indonesia</span></p>
            </td>
            <td class="date">Jun 2023 - <span>Nov 2023</span></td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>FrontEnd Developer</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="color: gray;" class="list">Mechanical City is event that organized by Mechanical Engineering Department</p>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Responsible for FrontEnd Development and UI/UX Features</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Modular Programming and Clean Architecture</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Tech Stack : TypeScript, Husky, ESLint, Prettier, TailwindCSS, Zustand, NextJS 13, Agile Scrum Development, Auto Layout</li>
            </td>
        </tr>

        <!-- Geosentric ITS -->
        <tr class="hover">
            <td>
                <p style="font-weight: bold; padding-top: 20px;">Geosentric ITS <span style="font-weight: normal;">- Surabaya, Indonesia</span></p>
            </td>
            <td class="date">Jun 2023 - <span>Nov 2023</span></td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>FrontEnd Developer</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="color: gray;" class="list">Geosentric is event that organized by Geomatics Engineering Department</p>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Responsible for FrontEnd Development, Backend Development, and UI/UX Features</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Modular Programming and Clean Architecture</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Tech Stack : TypeScript, Husky, ESLint, Prettier, TailwindCSS, Zustand, NextJS 13, Agile Scrum Development, Auto Layout</li>
            </td>
        </tr>

        <!-- Spasial ITS -->
        <tr class="hover">
            <td>
                <p style="font-weight: bold; padding-top: 20px;">Spasial ITS <span style="font-weight: normal;">- Surabaya, Indonesia</span></p>
            </td>
            <td class="date">Oct 2023 - <span style="font-weight: bold;">Present</span></td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>FrontEnd Developer</p>
            </td>
        </tr>
        <tr>
            <td>
                <p style="color: gray;" class="list">Spasial is event that organized by Interior Design Department</p>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Responsible for FrontEnd Development, Backend Development, and UI/UX Features</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Modular Programming and Clean Architecture</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Tech Stack : TypeScript, Husky, ESLint, Prettier, TailwindCSS, Zustand, NextJS 13, Agile Scrum Development, Auto Layout, Go (Gin Gorm)</li>
            </td>
        </tr>
    </table>

    <!-- ORGANISATIONAL EXPERIENCE -->
    <table id="organization" class="section" width="100%" style="padding-top: 10px;">
        <tr>
            <td>
                <h1 class="hover">Organization</h1>
            </td>
        </tr>

        <tr class="hover">
            <td>
                <p style="font-weight: bold;">Mabit NF<span style="font-weight: normal;">- Jakarta, Indonesia</span></p>
            </td>
            <td class="date">Sep 2020 - Apr 2021</td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>Vice Chairman Department of Linguistics</p>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Teaching English</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Manage students grade pass</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li>Pass 10 students into PTN</li>
            </td>
        </tr>

        <tr class="hover">
            <td>
                <p style="font-weight: bold; padding-top: 20px;">KSE ITS<span style="font-weight: normal;">- Surabaya, Indonesia</span></p>
            </td>
            <td class="date">Sep 2022 - <span style="font-weight: bold;">Present</span></td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>Branding Staff</p>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Design KSE Instagram feeds using CANVA and FIGMA (@kse_its)</li>
            </td>
        </tr>

        <tr class="hover">
            <td>
                <p style="font-weight: bold; padding-top: 20px;">Open Recruitment ITS Online<span style="font-weight: normal;">- Surabaya, Indonesia</span></p>
            </td>
            <td class="date">Jun 2022 - Nov 2022</td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>Branding Staff</p>
            </td>
        </tr>

        <tr class="hover">
            <td>
                <p style="font-weight: bold; padding-top: 20px;">Mabit NF<span style="font-weight: normal;">- Surabaya, Indonesia</span></p>
            </td>
            <td class="date">Sep 2022 - Mar 22</td>
        </tr>
        <tr style="font-style: italic;">
            <td style="font-size: smaller;">
                <p>Branding Staff</p>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Design poster Mabit NF</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Design feeds instagram @mabit_nf</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;">Podcast Mabit NF</li>
            </td>
        </tr>
    </table>

    <!-- SKILLS AND ACHIEVEMENTS -->
    <table id="skills" class="section" width="100%" style="padding-top: 10px;">
        <tr>
            <td>
                <h1 class="hover">Skills and Achievements</h1>
            </td>

        <tr>
            <td class="list">
                <li style="padding-top: 5px;"><span>Modules Taken (2021)</span>: Data Visualization using Python by Dicoding</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;"><span>Modules Taken (2021)</span>: Data Visualization using R by DQLab</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;"><span>Modules Taken (2021)</span>: Machine Learning using Python by Dicoding</li>
            </td>
        </tr>
        <tr>
            <td class="list">
                <li style="padding-top: 5px;"><span>Soft Skills (2020)</span>: TOEFL ITP (513 Average Score)</li>
            </td>
        </tr>
        </tr>
    </table>

    <!-- FOOTER -->
    <footer>
        Copyright © 2022 Thariq Agfi Hermawan - All Rights Reserved
    </footer>
</body>

</html>