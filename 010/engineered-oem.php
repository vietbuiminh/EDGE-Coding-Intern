<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Engineered OEM Solutions | AEHH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;0,800;1,400;1,700;1,800&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="header">

            <img src="http://aehh.net/images/logo.png"
                alt="Logo for AEHH that has AEHH in black letters, a blue swoop above the letters, and the words Applying Innovation to Manufacturing" />

            <p class="center"><span>Phone: 262-798-0535</span><br><br>Providing Industrial Productivity Solutions for
                Assembly, Custom Lifting, Material Removal, and MRO</p>
        </header>

        <section class="banner">
            <img src="http://aehh.net/banners/engineered-oem-solutions-banner.jpg" alt="">
        </section>

        <style>
            .product-table a {
                text-decoration: none;
                color: inherit;
            }

            .poster {
                max-width: 250px !important;
            }

            img {
                width: fit-content;
                margin: auto;
            }

            .flex {
                display: flex;
                align-items: center;
                justify-content: space-around;
            }

            article .flex img {
                width: 50%;
            }

            @charset "utf-8";

            html,
            body {
                margin: 0px !important;
                padding: 0px !important;
                font-family: 'Open Sans', Arial, sans-serif;
                background-color: #333;
                overflow-x: hidden;
            }

            img {
                max-width: 100% !important;
            }

            .container {
                max-width: 1800px;
                width: 100%;
                margin: 0 auto;
                position: relative;
                background-color: #fff;
            }

            .header {
                display: -ms-grid;
                display: grid;
                -ms-grid-columns: 1fr 3fr;
                grid-template-columns: 1fr 3fr;
            }

            .header img {
                padding: 2% 4%;
            }

            .header p {
                padding: 1%;
            }

            .banner {
                position: relative;
            }

            #banner-image {
                z-index: 1;
                width: 100%;
            }

            #nav {
                width: 100%;
                z-index: 10;
                position: absolute;
                top: 0;
                font-size: 16px;
                z-index: 2;
                background-color: rgba(33, 87, 166, 0.8);
            }

            #nav>a {
                display: none;
            }

            #nav li {
                position: relative;
                list-style-position: inside;
                list-style-type: none;
            }

            #nav li a {
                color: #fff;
                display: block;
                text-decoration: none;
                text-transform: uppercase;
            }

            #nav>ul {
                text-align: center;
                padding-left: 0px !important;
                margin-left: 0px !important;
            }

            #nav>ul>li {
                margin: 0px 15px;
                padding: 4px 8px;
                height: 100%;
                display: inline-block;
            }

            #nav>ul>li>a {
                height: 100%;
                text-align: center;
            }

            #nav>ul>li:not( :last-child)>a {}

            #nav>ul>li:hover>a,
            #nav>ul:not( :hover)>li.active>a {}

            #nav li ul {
                background-color: #ccc;
                display: none;
                position: absolute;
                top: 100%;
                margin-left: 0 !important;
                padding-left: 0 !important;
                width: 170px;
                text-align: left;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
            }

            #nav li:hover ul {
                display: block;
                left: 0;
                right: 0;
                z-index: 1;
            }

            #nav li:not( :first-child):hover ul {
                left: -1px;
            }

            #nav li ul a {
                color: #000;
                padding: 0.75em;
                /* 15 (20) */
            }

            #nav li ul li a:hover,
            #nav li ul:not( :hover) li.active a {}

            .content {
                width: 90%;
                padding: 2% 5%;
                display: inline-block;
            }

            .content-wide {
                display: -ms-grid;
                display: grid;
                padding: 2% 8%;
            }

            .solutions {
                border: 2px solid #374995;
                padding: 1% 2%;
                margin: 2% 0;
            }

            .product-table {
                border: 2px solid #374995;
                display: -ms-grid;
                display: grid;
                -ms-grid-columns: 1fr 1fr 1fr;
                grid-template-columns: 1fr 1fr 1fr;
                padding: 1% 2%;
                margin: 2% 0;
                grid-gap: 1%;
            }

            .product-table h2 {
                grid-column: 1/4;
            }

            article {
                text-align: center;
            }

            article img {
                width: 75%;
            }

            .content-left {
                position: relative;
                float: left;
                width: 58%;
                padding: 2%;
                margin-left: 2%;
                background-color: #FF3;
                min-height: 200px;
            }

            .content-right {
                position: relative;
                float: left;
                width: 28%;
                padding: 2%;
                margin-left: 2%;
                background-color: #963;
                min-height: 200px;
            }

            .row,
            .two-box-row,
            .three-box-row,
            .four-box-row {
                width: 100%;
                display: inline-block;
            }

            .two-box-row .box {
                width: 44%;
                padding: 0% 2%;
                margin: 0% 1%;
                position: relative;
                float: left;
            }

            .two-box-row .form-add {
                width: 30%;
            }

            .two-box-row .form {
                width: 58%;
            }

            .three-box-row .box {
                width: 23.33%;
                padding: 2%;
                position: relative;
                float: left;
                margin: 0% 3%;
                background-color: #fff;
            }

            .four-box-row .box {
                width: 17%;
                padding: 2%;
                position: relative;
                float: left;
                margin: 0% 2%;
                background-color: #fff;
            }

            .footer {
                width: 95%;
                background-color: #374995;
                color: #fff;
                min-height: 40px;
                position: relative;
                float: left;
                display: grid;
                grid-template-columns: 1.5fr 2fr 1fr;
                padding: 1% 2.5%;
                font-size: small;
            }

            .footer div {
                display: flex;
                align-items: center;
            }

            .footer div p {
                margin: 0 2.5%;
            }

            .footer a {
                color: white;
            }

            .footer-left {
                float: left;
                padding: 10px 0px 0px 25px;
            }

            .footer-right {
                float: right;
                padding: 10px 25px 0px 0px;
            }

            .no-margin {
                margin: 0px !important;
            }

            .no-padding {
                padding: 0px !important;
            }

            .no-bold {
                font-weight: normal !important;
            }

            .no-border {
                border: none !important;
            }

            .center {
                text-align: center;
            }

            .center span {
                font-weight: bold;
                margin-left: 75%;
            }

            .header .center {
                margin: 0;
                width: 98%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .block {
                display: block !important;
            }
            }
        </style>
        <section class="content">
            <h1>Engineered OEM Solutions</h1>
            <p>Designing a clean and simple product can provide serious challenges when bolted connections, pins and
                unique geometry parts are critical to success. AEHH strives to understand your goals by listening to
                your company’s needs. This knowledge is critical to helping find and present technologies that may
                benefit your products.</p>
            <p>AEHH has sought out and partnered with the below manufacturers whose solutions continually revolutionize
                the design and function of our customers products. These products provide simple, efficient ways to make
                tasks safe, easy and improve longevity in many cases. Select from one of the below categories to expand
                your knowledge on the cutting-edge technologies AEHH can provide.</p>
            <div class="product-table">
                <article><a href="#tensioners">
                        <div class="flex">
                            <img src="http://aehh.net/images/boltight-logo.png" alt="Boltight logo">
                            <img src="http://aehh.net/images/superbolt-logo.png" alt="Superbolt logo">
                        </div>
                        <div class="flex">
                            <img src="http://aehh.net/images/boltight-hydraulic-nuts.png" alt="Boltight Hydraulic Nuts">
                            <img src="http://aehh.net/images/superbolt-tensioners.png" alt="Superbolt Tensioners">
                        </div>
                        <p align="left"><strong>Hydraulic and Mechanical Tensioners</strong><br><br>

                            Zero-Friction Tensioning has proven to be the most accurate way to control preload.
                            Nord-Lock Group has developed a complete line of mechanical (Superbolt) and Hydraulic
                            (Boltight) tensioners that will best solve your bolting challenge. If your application
                            requires a thread of 0.750” (M16) or larger, this section is must read.</p>
                    </a></article>
                <article><a href="#expander">
                        <img src="http://aehh.net/images/expander-logo.png" alt="Expander logo">
                        <img src="http://aehh.net/images/expander-animatic.jpg" alt="Animatic of an Expander product">
                        <p align="left"><strong>Permanent Solution to Lug Wear</strong><br><br>

                            Expander Systems offers an engineered solution to lug where for your application. Heavy
                            equipment manufactures in the Agricultural, Construction and Mining Industries trust this
                            solution for keep their products in the field longer between service and reduce warranty
                            claims due to pin related challenges, including pin breakage.</p>
                    </a></article>
                <article><a href="#nordlock">
                        <img src="http://aehh.net/images/nordlock-logo.png" alt="Nord-Lock logo">
                        <img src="http://aehh.net/images/nordlock-original-washer.png" alt="Nord-Lock Original Washers">
                        <p align="left"><strong>Wedge-Locking Washer Technology</strong><br><Br>

                            When extreme vibration or dynamic loads create situations where fasteners come loose,
                            Nord-Lock provides the solution with their wedge-locking technology. This reusable solution,
                            will keep your hardware secure and customers satisfied.</p>
                    </a></article>
                <article><a href="#indicators">
                        <img src="http://aehh.net/images/industrial-indicators-logo.png"
                            alt="Industrial Indicators logo">
                        <img src="http://aehh.net/images/visual-bolt-tension-indicators.png"
                            alt="Visual Bolt Tension Indicators">
                        <p align="left"><strong>Visual Bolt Tension Indicators</strong><br><br>

                            When maintaining proper bolt stretch is critical to performance, Industrial Indicators
                            provides a visual verification system that confirms that your bolt is under load. This
                            solution has proven to be of great benefit when applied to equipment that needs to be
                            routinely checked, serviced in the field and places where purchasing expensive torque
                            control tools are not economical to your needs.</p>
                    </a></article>
                <article><a href="#deedrick">
                        <img src="http://aehh.net/images/deedrick-logo.jpg" alt="Deedrick logo">
                        <img src="http://aehh.net/images/deedrick-custom-parts.jpg"
                            alt="Deedrick Custom Precision Machined Parts">
                        <p align="left"><strong>Custom Precision Machined Parts</strong><br><br>

                            Deedrick Precision Machining is your solution to small, medium and large volume batch runs.
                            They understand that sometimes you need a small job to trial your parts and have the set up
                            to accommodate your needs. Need help designing your parts? Not a problem, we at AEHH will
                            work along side of you to communicate your needs.</p>
                    </a></article>
                <article><a href="#heico">
                        <img src="http://aehh.net/images/heico-logo.png" alt="Heico logo">
                        <div class="flex">
                            <img src="http://aehh.net/images/heico-ring-lock-washer.jpg" alt="Heico Ring Lock">
                            <img src="http://aehh.net/images/heico-combi-washer.jpg" alt="Heico Combi Washer">
                        </div>
                        <p align="left"><strong>Heico Ring Lock and Combi Washers</strong><br><br>

                            Heico’s German engineered Wedge Lock Washers continue to innovate bolting applications with
                            their reusable, preassembled ring lock and combi lock washers. This hardware is perfect for
                            those high volume assembly applications or trick to reach maintenance jobs, among many other
                            critical applications. </p>
                    </a></article>
                <article><a href="#heico">
                        <img src="http://aehh.net/images/heico-logo.png" alt="Heico logo">
                        <img src="http://aehh.net/images/heico-tensioning-nuts.jpg"
                            alt="Heico Mechanical Tensioning Nuts">
                        <p align="left"><strong>Heico Mechanical Tensioning Nuts</strong><br><br>

                            Heico’s German engineered Tensioning Nuts and Bolts are designed to make large diameter
                            bolts achievable with ordinary hand tools.</p>
                    </a></article>
                </a></article>
                <article><a href="#heico">
                        <img src="http://aehh.net/images/heico-logo.png" alt="Heico logo">
                        <img src="http://aehh.net/images/heico-form-products.png" alt="Heico Form Produts">
                        <p align="left"><strong>Heico Form Products</strong><br><br>

                            By this process, the HEICO group is able to replace castings and turned parts with
                            cold-formed components despite close tolerances. This offers advantages by optimising
                            material properties through cold working and reducing material usage.</p>
                    </a></article>
            </div><br><br>

            <img id="tensioners" style="width:100%;" src="http://aehh.net/banners/tensioners-banner.png"
                alt="Tensioners banner">
            <h1>Hydraulic and Mechanical Tensioners</h1>
            <p>Nord-Lock Group’s Superbolt and Boltight Divisions have been at the forefront of zero-friction tensioning
                for decades. AEHH works with Nord-Lock Group’s experienced engineering team is here to help provide you
                guidance when designing a tensioner into your build. Nord-Lock Group is sure to have the correct
                tensioner for your application, by providing many standard sizes and materials as well as the ability to
                manufacture small, medium and large quantities of custom tensioners.</p>
            <h2>Types of Tensioners</h2>
            <p>Below are the different categories of tensioners that Nord-Lock Group offers.</p>
            <div class="product-table">
                <article>
                    <p><strong>Versatite Tensioners</strong></p>
                    <img src="http://aehh.net/images/versatite-tensioners.jpg" alt="Versatite Tensioners">
                    <p align="left">Versatite tensioners take the best of hydraulic tensioning and mechanical tensioning
                        and combines them into a revolutionary technology. This hybrid tensioner allows you to use
                        hydraulics or mechanical methods to tension.</p>
                </article>
                <article><a href="#mechanical-tensioners">
                        <p><strong>Nut and Bolt Style Mechanical Tensioners</strong></p>
                        <img src="http://aehh.net/images/superbolt-tensioners.png" alt="Superbolt Tensioners">
                        <p align="left">Superbolt mechanical tensioners make large preloads easily obtained with their
                            Multi Jackbolt Tensioning System. Each small bolt is torqued to a small input that reacts
                            against a washer to create bolt stretch. The result is a high output when each jackbolt is
                            torqued to a small amount.</p>
                    </a></article>
                <article><a href="#hydraulic-tensioners">
                        <p><strong>Hydraulic Nut Tensioners</strong></p>
                        <img src="http://aehh.net/images/boltight-hydraulic-nuts.png" alt="Boltight Hydraulic Nuts">
                        <p align="left">Boltight hydraulic tensioners offer a fast and simple way to tension high
                            preloads. By using hydraulic pressure, the nut stretches the thread to proper load and
                            secures the joint.</p>
                    </a></article>
                <article><a href="#coupling-tensioners">
                        <p><strong>Mechanical and Hydraulic Coupling Bolt Tensioners</strong></p>
                        <div class="flex">
                            <img src="http://aehh.net/images/superbolt-hyfit.png" alt="Superbolt HyFit">
                            <img src="http://aehh.net/images/superbolt-ezfit.png" alt="Superbolt EzFit">
                        </div>
                        <p>The EzFit and HyFit Tensioners are designed for rotating couplings, where controlling both
                            radial and axial loads are critical.</p>
                    </a></article>
            </div><br><br>

            <img id="#mechanical-tensioners" style="width:100%;"
                src="http://aehh.net/banners/superbolt-graphic-banner.png" alt="Superbolt: Bolting made simple.">
            <h1>Mechanical Bolt and Nut Style Tensioners by Nord-Lock Group</h1>
            <p>Many challenges are faced when manufacturing products that requires the assembly of large diameter nuts
                and bolts. When using a turn torque solution, high preloads are not easily met or controlled because of
                the logistical and ergonomic challenges of fastening in these applications. Controlling preload is
                limited to 25% accuracy at best, when all torque procedures are being followed without any
                error.<br><br>

                Superbolt was the world’s first to revolutionize nuts and bolts with multi-jackbolt tensioning
                technology. Since then, our technology has been proven in tens of thousands of successful installations
                and we continue to develop a multitude of solutions to solve the next generation of bolting challenges.
                By using zero friction mechanical tensioning, bolts stretch under pure tension without any torque wind
                up, resulting in a safe, fast and accurate way to control preload in a tight tolerance around 10%
                accuracy.</p>
            <h2>Common Applications for Mechanical Tensioners</h2>
            <p>Below are some of the industries and applications where mechanical tensioners are used throughout
                industry both OEM and Aftermarket. In many instances, our OEM business results from solving a challenge
                for the end user in the field. The combination of installation labor savings, increased quality control
                and reduced risk of injury provides many opportunities for mechanical tensioners to provide cost savings
                in your operation.</p>
            <img src="http://aehh.net/images/superbolt-poster-12.png" alt="Superbolt product applications poster">
            <h2>Case Studies</h2>
            <p><Strong>Presses</Strong><br>
                Applications include: Press columns, tie rods, bearing blocks, high pressure piping, die cushions,
                cylinder ram bolting, anchor bolts, and more.</p>
            <div class="product-table">
                <article>
                    <img src="http://aehh.net/images/superbolt-poster-13.png" alt="Superbolt product application">
                    <p align="left">The world's largest bolt-style multi-jackbolt tensioner 28" diameter x 40' long
                        (711,2 mm diameter and 12,2 m long). This was used on a large hydraulic forging press.</p>
                </article>
                <article>
                    <img src="http://aehh.net/images/superbolt-poster-14.png" alt="Superbolt product application">
                    <p align="left">Eight Superbolt column nuts required only 12 man-hours for installation vs. 2-1/2
                        full days of heating for columns.</p>
                </article>
                <article>
                    <img src="http://aehh.net/images/superbolt-poster-15.png" alt="Superbolt product application">
                    <p align="left">Split-Nut thrust collars are a custom designed product from Superbolt that are much
                        easier to install and remove than other large threaded fasteners on large press columns.</p>
                </article>
            </div>
            <p><strong>Power Generation</strong><br>
                Applications include: Turbine couplings, stay rods, manway doors, inlet flanges, boiler circ pump main
                flange, boiler feed pump head and barrel casing, turbine wheel to shaft bolting, pelton turbine nozzles,
                servo piston nuts, bearing housings, and more.</p>
            <div class="product-table">
                <article>
                    <img src="http://aehh.net/images/superbolt-poster-16.png" alt="Superbolt product application">
                    <p align="left">With Superbolt tensioners, joints in awkward positions in confined spaces can be
                        tightened. This Francis wheel has regular maintenance requirements which became manageable with
                        MJTs connecting the wheel to the shaft.</p>
                </article>
                <article></article>
                <article>
                    <img src="http://aehh.net/images/superbolt-poster-4.jpg" alt="Superbolt product application">
                    <p align="left">For this boiler feed pump the 5-inch (127 millimeter) studs were previously
                        tightened with a very large wrench in conjunction with heating rods. This method required 1-2
                        shifts (sometimes three) with three workers for installation or removal. Occasionally a nut
                        would seize and would require destructive removal. For this boiler feed pump, MJTs were
                        installed using ½-inch impacts for initial tightening, and calibrated torque wrenches for the
                        final torque step. Two workers were utilized for the installation which required about fifteen
                        minutes to spin the tensioners into position, and one hour and twenty-one minutes to tighten.
                        This was a significant time savings versus the previous method.</p>
                </article>
            </div>
            <h2>Why are customers using Superbolt?</h2>
            <p>
            <ul>
                <li>Tremendous clamping force available</li>
                <li>Low torque requirement - only hand tools needed</li>
                <li>Safe method for installation personnel</li>
                <li>Quick installation and removal</li>
                <li>Tightens stud/bolts using pure tension</li>
                <li>Tensioner flexibility adds elasticity to studs/bolts to create a better bolted joint</li>
                <li>Fits in restricted areas</li>
                <li>Provides even tension from stud to stud</li>
                <li>Accurate within 10% of specified bolt tension</li>
            </ul><br><br>

            <a href="http://aehh.net/contact.php">Contact us</a> today to learn how Superbolt products can fit into your
            application or check out our Nord-Lock Group Page in the header.</p><br><br>

            <img id="#hydraulic-tensioners" style="width:100%;"
                src="http://aehh.net/banners/hydraulic-nut-graphic-banner.png" alt="Hydraulic Nuts">
            <h1>Hydraulic Nut Tensioners by Nord-Lock Group</h1>
            <p>Hydraulic nuts enable large diameter bolts to be tensioned with ease to high and accurate preloads. A
                hydraulic pump activates the internal jacking system, so the effort required to tighten a very large
                diameter bolt is reduced to the effort needed to operate the pump.<br><br>

                As there is no nut rotation during tightening, the operation can be performed in a confined space and
                torsional stresses on thread damage are eliminated. Any number of hydraulic nuts can be connected
                together for simultaneous operation, ensuring all bolts in the joint can be evenly loaded to the same
                high and accurate preload.</p>
            <h2>Why are customers using Hydraulic Nuts?</h2>
            <p>
            <ul>
                <li>Quick and easy to install</li>
                <li>Even and accurate load as it is developed hydraulically</li>
                <li>Low loss of initial load (shim)</li>
                <li>No torque or tension stress</li>
                <li>No flogging hammers or spanners</li>
                <li>Self-aligning (shim)</li>
                <li>Improved fatigue performance</li>
                <li>100% simultaneous tension</li>
                <li>Long life of internal jack - very compact and cost effective</li>
                <li>Less stud protrusion required than for tensioners</li>
            </ul>
            </p>
            <h2>How Hydraulic Nuts Work</h2>
            <p><iframe style="width:50%; height:300px; margin:auto; display:flex;"
                    src="https://www.youtube.com/embed/e7Yr4bJ3WGE" frameborder="0" allowfullscreen></iframe><br><br>

                <a href="http://aehh.net/contact.php">Contact us</a> today to learn how Boltight Hydraulic Nuts can fit
                into your application.
            </p><br><br>

            <img id="#mechanical-tensioners" style="width:100%;"
                src="http://aehh.net/banners/mechanical-expansion-bolts-graphic-banner.png"
                alt="Mechanical Expansion Bolts">
            <h1>EzFit and Hyfit by Nord-Lock Group</h1>
            <p>EzFit mechanical expansion bolts and Hyfit hydraulic expansion bolts, both offer tremendous radial
                expansion and joint clamping power in one bolting system. They are specially designed for rotating
                couplings or alignment systems that require the bolts to transfer forces in shear.<br><br>

                This innovative product replaces large fitted or interference fit bolts, no modifications required. The
                key to this solution is the split expansion sleeve that mates with the customers' machined holes. The
                split sleeve requires less tolerance on mating parts than is traditionally required with interference
                fit, saving critical machining time.</p>
            <h2>Styles of Expansion Bolts?</h2>
            <div class="product-table">
                <article>
                    <p><strong>A Type</strong></p>
                    <img src="http://aehh.net/images/expansion-a-type.png" alt="Expansion A-Type">
                    <p align="left">Mechanical expansion bolt for threadless bore<br>
                        Access and operation from one side<br>
                        Dimension on request</p>
                </article>
                <article>
                    <p><strong>B Type</strong></p>
                    <img src="http://aehh.net/images/expansion-b-type.png" alt="Expanion B-Type">
                    <p align="left">Mechanical expansion bolt for blind holes<br>
                        Access and operation from one side<br>
                        ∅ 28 – 165mm</p>
                </article>
                <article>
                    <p><strong>C Type</strong></p>
                    <img src="http://aehh.net/images/expansion-c-type.png" alt="Expansion C-Type">
                    <p align="left">Mechanial expansion bolt for through-holes<br>
                        Access and operation from both sides<br>
                        ∅ 28 – 165mm</p>
                </article>
            </div>
            <h2>Expansion Bolt Applications</h2>
            <div class="product-table">
                <article>
                    <img src="http://aehh.net/images/superbolt-poster-5.jpg" alt="Superbolt product application">
                    <p align="left">Flange coupling of the gear box on a wind turbine. An expansion bolt with integrated
                        Superbolt technology is used to transmit the enormous torque. The solution is also compact and
                        does not add a lot of weight, which was a requirement.</p>
                </article>
                <article></article>
                <article>
                    <img src="http://aehh.net/images/superbolt-poster-17.png" alt="Superbolt product application">
                    <p align="left">Superbolt expansion bolts are ideally suited for shaft couplings, as seen here on
                        this Francis type pump/generator shaft coupling at a pumped storage facility.</p>
                </article>
            </div>
            <h2>How Expansion Bolts Work</h2>
            <p><iframe style="width:50%; height:300px; margin:auto; display:flex;"
                    src="https://www.youtube.com/embed/Qe6wYfC8uz4" frameborder="0" allowfullscreen></iframe><br><br>

                <a href="http://aehh.net/contact.php">Contact us</a> today to learn how Expansion bolts can fit into
                your application.
            </p><br><br>

            <img id="expander" width="100%" src="http://aehh.net/banners/expander-graphic-banner.png"
                alt="Expander: The Permenant Solution to Lug Wear">
            <h1>EXPANDER Pivot Pin Technology by Nord-Lock Group</h1>
            <p>Lug wear is a common problem with all machinery. Repairs involve a costly, time-consuming process with
                significant downtime and must be repeated several times over a machine’s life.<br><br>

                With the Expander System, the repair can be carried out directly in the worn mountings without welding
                and line boring – a permanent solution to lug wear.</p>
            <h2>Prevent lug wear from the first installation</h2>
            <p>Experts in the design and manufacture of machinery deserve to partner with experts in pivot pins.
                Whatever your machine, industry or application, EXPANDER will create the perfect pivot pin for your
                assemblies. From structural strength calculations to the dimensioning and production of your complete
                pivot pin axle – their personalized service will accompany you throughout the pivot pin creation
                process.<br><br>

                Their manufacturing plant in Dewitt, IA United States guarantee a speedy delivery, wherever you are in
                the world. With your pivot pin project in safe hands, you can dedicate more time to other areas of the
                machine building process. <br><br>

                Expander System is used by many OEMs, including Caterpillar, Komatsu, Volvo and John Deere.</p>
            <h2>Case Study</h2>
            <p><strong>Customer:</strong> BLACKWELL, PART OF HARGREAVES SERVICES PLC<br>
                <strong>Solution:</strong> EXPANDER SYSTEM<br>
                <strong>Business:</strong> EARTHWORKS CONTRACTORS<br>
                <strong>Project:</strong> HOUSE OF WATER COAL MINE, SCOTLAND<br>
                <strong>Challenge:</strong> REDUCING DOWNTIME DURING MAINTENANCE<br>
                <strong>Application:</strong> TRUCK SUSPENSION LEG MOUNTINGS AND HOIST MOUNTINGS<br>
                <strong>Time saves:</strong> DOWNTIME REDUCED FROM DAYS TO A FEW HOURS<br><br>

                After many hours of operation in the abrasive conditions of a gran¬ite quarry, the truck had suffered
                significant wear in its suspension lug mountings and hoist mount¬ings, and required maintenance work.
                Because of the design of the Caterpillar 777G, line boring would have required removal and storage of
                the rear wheels. As each wheel weighs 4 tonnes, it is a manually intensive and risky job.<br><br>

                Furthermore, line boring is a costly, disruptive and time-consuming process that had been an integral
                part of Blackwell’s business for decades due to the use of regular straight pins. At a modern mine,
                every minute of lost production costs money, so to keep production going, replace¬ment machines were
                brought in, which increases complications and expenses. When Expander System approached the compa¬ny
                with an alternative, they were happy to try it.<br><br>

                During the installation of the new pins, the heavy rear wheels of Blackwell’s 777G could stay in place,
                which alone saved several hours.<br><br>

                “With the Expander System, downtime was reduced from days to just a few hours,” says Blackwell Plant
                Manager, David Lancashire. “While it’s too early to judge the long-term savings, the system has already
                given us impressive savings in both time and money.”<br><br>

                The Expander System also increases the lifecycle of the joint up to 50,000 hours. After a positive start
                with the system, Blackwell recently used it on a wheeled loader and are look¬ing to increase its use as
                a repair option on their extensive fleet.
            </p>
            <h2>Why are customers using Expander Systems?</h2>
            <p>
                <img class="poster" src="http://aehh.net/images/expander-poster-4.jpg"
                    alt="Caterpillar equipment using Expander technology" align="right">
            <ul>
                <li>Increase your customer satisfaction with a permenant solution to lug wear</li>
                <li>Offer your customers the market's best lifetime and total cost solution</li>
                <li>Access technical support and an engineering team that understands your pivot issues</li>
                <li>Safety stock handling</li>
                <li>Access all pivot pin designs, place orders and follow production stages in the <u>Expander web
                        shop</u></li>
                <li>Order Tracking</li>
            </ul>
            </p>
            <h2>How EXPANDER Pivot Pin Technology Works</h2>
            <p><iframe style="width:50%; height:300px; margin:auto; display:flex;"
                    src="https://youtube.com/embed/aTpSFFL33Ic" frameborder="0" allowfullscreen></iframe><br><br>

                <strong>Installation guide:</strong><br>
            <ol>
                <li>The Expander System is installed directly into the existing mounting</li>
                <li>Upon tightening the fasteners, the washer presses the slotted expansion sleeve up the tapered ends
                    of the pin</li>
                <li>The sleeves expand, conform with the wear pattern and lock the system in the lug ears</li>
                <li>Once retorqued, the system will lock from both sides</li>
            </ol><br><br>

            <a href="http://aehh.net/contact.php">Contact us</a> today to learn how EXPANDER Pivot Pin Technology can
            eliminate lug wear into your application.</p><br><br>

            <img id="nordlock" width="100%" src="http://aehh.net/banners/wedge-locking-graphic-banner.png"
                alt="Nord-Lock: Wedge Locking Technology">
            <h1>Wedge-Locking Technology by Nord-Lock Group</h1>
            <p>Extreme vibration and dynamic loads often cause bolting challenges for manufactures. Nord-Lock
                wedge-locking technology secures bolted joints with tension instead of friction. The system is composed
                of a pair of reusable lock washers with cams on one side and radial teeth on the other. Nord-Lock
                wedge-locking products secure the fastener in a joint which cannot be loosened even when subjected to
                extreme vibration or dynamic loads. The Nord-Lock range includes steel construction washers, wheel nuts,
                combi bolt washers and custom solutions.</p>
            <h2>Why are customers using Wedge-Locking Technology?</h2>
            <p>
            <ul>
                <li>Quick and easy to install and remove with hand tools</li>
                <li>Locking function not affected by lubrication</li>
                <li>High corrosion resistance</li>
                <li>Reliable locking, even for joints with short clamp length</li>
                <li>Reusable (depending on usage environment)</li>
            </ul>
            </p>
            <h2>How Wedge-Locking Technology Works</h2>
            <p><iframe style="width:50%; height:300px; margin:auto; display:flex;"
                    src="https://www.youtube.com/embed/IKwWu2w1gGk" frameborder="0" allowfullscreen></iframe><br><br>

                <a href="http://aehh.net/contact.php">Contact us</a> today to learn how Wedge-Locking Technology can
                secure hardware into your application.
            </p><br><br>

            <img id="indicators" width="100%" src="http://aehh.net/banners/indicators-graphic-banner.png"
                alt="Industrial Indicators: Incredibly advanced. Surprisingly simple.">
            <h1>DTI Smart-Bolts - Direct Tension Indicating</h1>
            <p>Confirming and maintaining tension of fasteners can be a timely but critical job for many manufactures.
                Using expensive tools and measuring equipment have their place but often lead to problems when customers
                are maintaining equipment in the field. DTI (Direct Tension Indicating) Smart Bolts directly correlate
                fastener tension with color. Accuracy and reliably is ensured because the color change of the DTI Visual
                Indication System™ is proportional to fastener stretch — the only true measure of how tight your joint
                is (torque readings can be misleading since torque only measures how difficult it is to turn the bolt
                head).<br><br>

                The Smart Bolts built-in visual tension indicator turns from red to black when proper tension has been
                reached — and is completely reversible for the life of the fastener.</p>
            <img class="flex" src="http://aehh.net/images/indicators-poster-1.png"
                alt="Umatched Benefits of Industrial Indicators">
            <h2>How do DTI SmartBolts work?</h2>
            <p><img class="poster" src="http://aehh.net/images/visual-bolt-tension-indicators.png"
                    alt="Visual Bolt Tension Indicators" align="right">The visual indicator in a DTI SmartBolt gradually
                changes color according to the amount of tension that is applied to the bolt. The visual indicator is
                black when Design Tension is reached and red when loose. This color change provides a real-time
                indication of bolt tension.</p>
            <img class="flex" src="http://aehh.net/images/indicators-poster-2.png"
                alt="Visual Indication System from Industrial Indicators">
            <p><strong>Can the DTI Visual Indicator be designed into any type of fastener?</strong><br>
                DTI SmartBolts are available in a wide range of fastener types and sizes. Please review the Fastener
                Size Ranges table for additional information. If you have a requirement that is not listed in the table,
                please contact us to discuss availability.<br><br>

                <strong>Can I use normal tools with DTI SmartBolts?</strong><br>
                Yes! DTI SmartBolts are designed to be used with the same tools you’re already using to install and
                maintain your bolted joints. In cases where the indicator is covered with a tool during use, we
                recommend tightening the DTI SmartBolt in stages to check the indicator and prevent overtightening.
            </p>

            <h2>DRI Visual Indication System</h2>
            <p>The DTI Visual Indication System™ continuously measures and displays tension information. From loose to
                tight and back again, the system is reliable and repeatable through countless cycles of operation. It is
                compatible with a wide range of fastener types, and we can adapt it to fasteners of nearly every
                available grade, finish, and coating.</p>
            <img class="flex" src="http://aehh.net/images/indicators-poster-3.png"
                alt="Visual Indication System from Industrial Indicators">
            <p>Their engineering team can design the DTI Visual Indication System to meet the specific requirements of
                your application. During the design phase, a Design Tension is specified. The Design Tension identifies
                a properly tightened SmartBolt.</p>
            <img class="flex" src="http://aehh.net/images/indicators-poster-4.png"
                alt="Specific details from Industrial Indicators">
            <p><strong>Do DTI SmartBolts indicate tension or torque?</strong><br>
                The DTI SmartBolt indicator measures tension. When a bolt is tightened, it is forced to stretch. This
                stretching force on a fastener is also called tension. Tension creates the clamp force that holds your
                bolted joints together.</p>
            <img class="flex" src="http://aehh.net/images/indicators-poster-5.png"
                alt="Unprecedented Value from Industrial Indicators">
            <h2>Case Studies from SmartBolt</h2>
            <img class="flex" src="http://aehh.net/images/indicators-poster-6.png"
                alt="Case studies from Industrial Indicators">
            <img class="flex" src="http://aehh.net/images/indicators-poster-7.png"
                alt="Case studies from Industrial Indicators">
            <img class="flex" src="http://aehh.net/images/indicators-poster-8.png"
                alt="Fastener size ranges from Industrial Indicators">
            <p><a href="http://aehh.net/contact.php">Contact us</a> today to learn how DTI Smart Bolts can verify
                tension into your application.</p><br><br>

            <img id="deedrick" width="100%" src="http://aehh.net/banners/deedrick-graphic-banner.png"
                alt="Deedrick Precision Machining, Inc.">
            <h1>Deedrick Precision Machining</h1>
            <p>AEHH is partnered with Deedrick Precision Machining to provide you with a competitive source for small,
                medium and large volume precision machined parts. We work with our customers in the design and
                development of new products, custom parts and the modification or improvement of existing parts.</p>
            <h2>Capabilities</h2>
            <img class="flex" src="http://aehh.net/images/deedrick-poster-1.png" alt="Deedrick capabilities">
            <a href="http://aehh.net/contact.php">Contact us</a> today to learn how AEHH can be of assistance in your
            application.</p>

            <img width="100%" src="bolts_background.jpg" alt="multi products from Heico" />
            <h1>HEICO-LOCK® RING LOCK WASHERS</h1>
            <img style="width: 10em;" src="heico_ring_lock.jpg" alt="heico ring lock" />
            <p><strong>HEICO-LOCK® Ring Lock Washers provide high-quality, user-friendly bolt securing for the most
                    demanding of applications and are ideal for repeated use.</strong><br>
                The ring locking system guarantees that the two wedge lock washers are always fastened in the correct
                position with the wedge shaped cams on the inside and the radial teeth on the outside. This means that
                the bolt locking system is always easy, safe and quick to install, even for non-specialist users.
            </p>
            <h3>DESIGN OF THE RING LOCKING SYSTEM</h3>
            <p>HEICO-LOCK® Ring Lock Washers are supplied pre-assembled. The ring locking system consists of a polyamide
                ring (PA) and the already familiar HEICO-LOCK® Wedge Lock Washers.
            <ul>
                <li>Very easy to install and remove (ring locking system is supplied pre-assembled)</li>
                <li>Whereas the HEICO-LOCK® Wedge Lock Washers secure the bolted connections reliably,
                    the ring holds the two individual washers together in the correct position permanently</li>
                <li>Particularly suitable for dynamic loads – including when lubricants are used</li>
                <li>Also suitable for use with high-tensile bolts of 8.8, 10.9 and 12.9 and their respective nuts</li>
                <li>Available from M4 – M24 - custom sizes upon request</li>
            </ul>
            </p>

            <h1>HEICO-LOCK® COMBI-WASHERS</h1>
            <img style="width: 10em;" src="heico_combi_washers.jpg" alt="heico combi washers" />
            <p><strong>The efficient combined securing system for highly loaded bolted connections</strong><br>
                HEICO-LOCK® Combi-Washers enable quick and easy assembly, especially in difficult installation
                situations. Combine the simple to use HEICO-LOCK® Combi-Washers with all commercially available bolts
                provided by your suppliers, quickly and easily.
            <ul>
                <li>Easy mounting and permanent connection thanks to the inset tabs</li>
                <li>Can be combined with all commercially available bolts</li>
                <li>Also available in small purchase quantities</li>
                <li>Flexible use for various different types of bolts</li>
                <li>Permanent securing and correct positioning of HEICO-LOCK® Wedge Lock Washers</li>
                <li>Can be re-used several times</li>
                <li>Cost savings through increased productivity</li>
                <li>Available in steel or stainless steel with narrower and wider contact areas</li>
                <li>Available from M8 to M16</li>
                <li>Can be supplied completely pre-assembled on request</li>
            </ul>
            Tailored precisely to your requirements <br>
            <img style="width: 10em;" src="heico_combi_washers_1.jpg" alt="heico combi washers 1" /> <br>
            We supply HEICO-LOCK® Combi-Washers to meet your requirements. Fit HEICO-LOCK® Combi-Washers to your own
            existing bolts, quickly and easily. You can choose to carry out this step yourself or we can supply you with
            pre-assembled bolts ready to use.<br> <br>
            HEICO-LOCK® Combi-Washers fit all commercially available bolts, giving you a decisive advantage as the combi
            product enables you to optimize your purchases through space-saving storage. Benefit from our short delivery
            times and attractive small purchase quantities too.
            </p>
            <img width="100%" src="heico_background.jpg" alt="multi products from Heico" />
            <h1>HEICO-TEC® TENSIONING SYSTEMS</h1>
            <p>
            <ul>
                <li>Easy, fast and reliable assembly of large bolted joints</li>
                <li>High preload force due to torsion-free assembly</li>
                <li>Controlled friction characteristics ensure the highest tightening and repeat accuracy</li>
                <li>Losses from settlement of the joint do not occur and full capacity of the joint is achieved</li>
                <li>Tension nuts and reaction nuts are compatible with common strength classes according to ISO 898-2
                </li>
                <li>Can be re-used several times</li>
                <li>Standard available from M20-M120 strength class 8 and M20-M90 strength class 10</li>
                <li>Other strength classes, bolt sizes, thread types and thread pitches are available on request</li>
            </ul>
            <div style="display: flex;">
                <img style="width: 30vw;" src="heico_tensioning_system.jpg" alt="tension system from Heico" />
                <img style="width: 30vw;" src="heico_tensioning_system1.jpg" alt="tension system from Heico" />
            </div>
            </p>

            <img width="100%" src="heico_background1.jpg" alt="multi products from Heico" />

            <h1>HEICO-TEC® MULTI-TOOL</h1>
            <img style="width: 10em;" src="heico_multi_tool.png" alt="heico multi tool" />
            <p><strong>Due to its unique design, the HEICO-TEC® Tension Nut can be tightened and untightened by hand,
                    making installation easy, reliable and safe.</strong><br>
                For use in serial production, HEICO have developed the HEICO-TEC® Multi-Tool. This tool allows the
                simultaneous tightening of all the pressure bolts, simply by the press of a button, without any
                additional force being required by the installation personnel.
            </p>
            <h3>ADVANTAGES OF THE HEICO-TEC® MULTI-TOOL:</h3>
            <p>
            <ul>
                <li>Simultaneous tightening of all the pressure bolts without any additional force being required</li>
                <li>Multi-Tool is easily mounted using spring-loaded sockets</li>
                <li>Existing hydraulic units can be used without any problem</li>
                <li>For optimized serial applications</li>
            </ul>
            </p>
            <h3>DESIGN AND FUNCTION</h3>
            <img style="width: 10em;" src="heico_multi_tool1.jpg" alt="heico multi tool" />
            <p>
                The HEICO-TEC® Multi-Tool is equipped with spindles for each pressure bolt which are driven
                hydraulically. This ensures that each pressure bolt is tightened with the exact same torque. With the
                HEICO-TEC® Multi-Tool subsequent manual checking with a torque wrench, as is common with other tools, is
                no longer required, saving precious time.<br>
                The HEICO-TEC® Multi-Tool is easily mounted using spring-loaded sockets. During further alignment of the
                tool the sockets snap in place automatically.<br>
                The HEICO-TEC® Multi-Tool is driven by a hydraulic unit incorporating a pump, controls and an oil
                container. You can either use your existing hydraulic unit or purchase one from HEICO, if preferred.<br>
                The torque can be selected by adjusting the hydraulic pressure on a pressure valve. A helpful conversion
                table is provided along with any HEICO-TEC® Multi-Tool supplied.
            </p>

            <img width="100%" src="heico_background2.jpg" alt="multi products from Heico" />

            <h1>HEICO-FORM PRODUCT OVERVIEW</h1>
            <p>We work wire (steel, stainless steel, nonferrous metals and special alloys) with a diameter ranging from
                2 mm to 16 mm into solid parts, semi-hollow parts and hollow parts. These special parts can have length
                of up to 100 mm and a head or collar diameter of up to 30 mm.</p>
            <div>
                <div>
                    <h3>Solid and semi-solid parts</h3>
                    <p>The manufacture of solid and semi-hollow parts is based on customer-specific requirements.
                        Depending on
                        customer wishes, the head and bore geometries of the items are produced contrary to the usual
                        DIN
                        specifications.</p>
                    <img style="width: 10em;" src="solid.jpg" alt="solid part" />
                </div>
                <div>
                    <h3>Sleeves / Hollow parts</h3>
                    <p>Sleeves are manufactured in different head and shank geometries. Thanks to economical production
                        on our
                        multi-stage presses considerable cost savings can be made compared with conventional turned
                        parts.</p>
                    <img style="width: 10em;" src="sleeves.jpg" alt="sleeves part" />
                </div>
                <div>
                    <h3>Threaded parts</h3>
                    <p>Internal or external threads can be manufactured both mechanically and by machine-cutting in
                        finishing.
                        These operations are called thread rolling, thread moulding or thread cutting.</p>
                    <img style="width: 10em;" src="threaded.jpg" alt="threaded part" />
                </div>
                <div>
                    <h3>Knurled parts</h3>
                    <p>Machined parts can be manufactured with a radial or an axial knurl. These knurls are applied in
                        the
                        course of the pressing operation or in the downstream mechanical machining.</p>
                    <img style="width: 10em;" src="knurled (2).jpg" alt="knurled part" />
                </div>
                <div>
                    <h3>Step pins</h3>
                    <p>Step pins are commonly used in hinge technology as moving link elements. In assemblies they act
                        as
                        spacers between the components.</p>
                    <img style="width: 10em;" src="step.jpg" alt="step part" />
                </div>
                <div>
                    <h3>Ball pins</h3>
                    <p>We manufacture ball pins with different part geometries (such as for example hexagon head or
                        recessed
                        drives in the ball head) for riveting, welding or screwing. This group of parts can be
                        manufactured by
                        machine-cutting or even ready finished with segment tools on our multi-stage presses.<br>
                        Special machining processes such as induction hardening of the ball or thread locking can be
                        implemented
                        at the customer's request.
                    </p>
                    <img style="width: 10em;" src="ball (2).jpg" alt="ball pins part" />
                </div>
                <div>
                    <h3>Metal plastic parts</h3>
                    <p>The pressed cold-formed parts are fed by robot technology and form a keyed connection after
                        plastic
                        injection moulding.</p>
                    <img style="width: 10em;" src="metal.jpg" alt="metal plastic part" />
                </div>
                <div>
                    <h3>Special parts</h3>
                    <p>We manufacture on our multi-stage presses project-specific special and development parts which
                        are
                        realised using cutting-edge tool technology. Special profile wires can be used here or even
                        non-standard
                        designs can be pressed.</p>
                    <img style="width: 10em;" src="knurled (2).jpg" alt="knurled part" />
                </div>
            </div>
        </section>

        <section class="footer">
            <p>
                <b>AIR*ELECTRIC*HYDRAULIC AND HOIST LLC</b><br>
                2100 W. Capitol Drive Suite 6<br>
                Brookfield, WI 53072
            </p>
            <div>
                <p><b>Office:</b> 262-798-0535</p>
                <p><b>Fax:</b> 262-798-7928</p>
                <p><b>Email:</b>sales@aehh.net</p>
            </div>
            <div>
                <p><b>Applied Innovation Library</b></p>
            </div>
        </section>

    </div>
</body>

</html>