<?php include 'includes/header.php'; ?>

<!-- HERO SECTION - FULL SCREEN DARK MODE -->
<section style="background-color: var(--dark-black); min-height: 90vh; display: flex; align-items: center; position: relative; overflow: hidden; padding: 0 5%;">
    
    <!-- Background Graphic Element (Huge Red Text) -->
    <div style="position: absolute; right: -5%; top: 10%; font-size: 30vw; font-weight: 900; color: #111; z-index: 0; user-select: none; line-height: 1;">
        NM
    </div>

    <div style="position: relative; z-index: 1; max-width: 1000px;">
        <h5 class="reveal" style="color: var(--primary-red); font-weight: 800; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 20px; font-size: 1rem;">
            Precision Engineering. Powered by Grit.
        </h5>
       <h1 class="reveal" style="color: var(--white); font-size: 6vw; line-height: 1.1; font-weight: 900; margin-bottom: 30px; text-transform: uppercase;">
            PRECISION ENGINEERING.<br>
            <span style="color: transparent; -webkit-text-stroke: 2px var(--primary-red);">BUILT ON TRUST.</span>
        </h1>
       <p class="reveal" style="color: var(--text-grey); font-size: 1.2rem; max-width: 600px; margin-bottom: 40px; line-height: 1.8;">
            NMuza Engineering provides specialized hydraulic cylinder rebuilds, precision machining, and 24/7 mobile field services across Gauteng. We keep your heavy machinery running.
        </p>
        
        <div class="reveal" style="display: flex; gap: 20px; flex-wrap: wrap;">
            <a href="pages/request-quote.php" style="background-color: var(--primary-red); color: var(--white); padding: 18px 40px; font-weight: 800; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px; border: 2px solid var(--primary-red); transition: all 0.3s;">
                Request Emergency Repair
            </a>
            <a href="pages/services.php" style="background-color: transparent; color: var(--white); padding: 18px 40px; font-weight: 800; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 1px; border: 2px solid #333; transition: all 0.3s;">
                Our Capabilities
            </a>
        </div>
    </div>
</section>

<!-- STATS SECTION -->
<section style="background-color: var(--primary-red); padding: 40px 5%; display: flex; justify-content: space-around; flex-wrap: wrap; gap: 30px; text-align: center;">
    <div>
        <h2 style="color: var(--white); font-size: 3rem; font-weight: 900; margin-bottom: 5px;">24/7</h2>
        <p style="color: var(--white); font-weight: 600; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px;">Mobile Response</p>
    </div>
    <div>
        <h2 style="color: var(--white); font-size: 3rem; font-weight: 900; margin-bottom: 5px;">ON-SITE</h2>
        <p style="color: var(--white); font-weight: 600; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px;">Diagnostics & Repairs</p>
    </div>
    <div>
        <h2 style="color: var(--white); font-size: 3rem; font-weight: 900; margin-bottom: 5px;">ZERO</h2>
        <p style="color: var(--white); font-weight: 600; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px;">Harm Philosophy</p>
    </div>
</section>

<!-- CORE CAPABILITIES GRID -->
<section style="background-color: var(--dark-black); padding: 100px 5%; border-top: 1px solid #222;">
    <div style="max-width: 1400px; margin: 0 auto;">
        <h2 class="reveal" style="color: var(--white); font-size: 2.5rem; font-weight: 900; text-transform: uppercase; margin-bottom: 50px; border-left: 5px solid var(--primary-red); padding-left: 20px;">
            Core Capabilities
        </h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
            
            <!-- Card 1 -->
            <div class="reveal" style="background: #111; border: 1px solid #333; padding: 40px; transition: transform 0.3s, border-color 0.3s;" onmouseover="this.style.transform='translateY(-5px)'; this.style.borderColor='var(--primary-red)'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#333'">
                <i class="fas fa-cogs" style="font-size: 2.5rem; color: var(--primary-red); margin-bottom: 25px;"></i>
                <h3 style="color: var(--white); font-size: 1.5rem; margin-bottom: 15px; font-weight: 800;">Hydraulic Cylinders</h3>
                <p style="color: var(--text-grey); line-height: 1.6; font-size: 0.95rem;">
                    Expert on-site diagnostics, cylinder rebuilding, and valve/pump/motor repairs for all major machinery lines.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="reveal" style="background: #111; border: 1px solid #333; padding: 40px; transition: transform 0.3s, border-color 0.3s;" onmouseover="this.style.transform='translateY(-5px)'; this.style.borderColor='var(--primary-red)'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#333'">
                <i class="fas fa-tools" style="font-size: 2.5rem; color: var(--primary-red); margin-bottom: 25px;"></i>
                <h3 style="color: var(--white); font-size: 1.5rem; margin-bottom: 15px; font-weight: 800;">General Machining</h3>
                <p style="color: var(--text-grey); line-height: 1.6; font-size: 0.95rem;">
                    Precision machining, custom fabrication, and mechanical overhauls to keep your equipment in peak condition.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="reveal" style="background: #111; border: 1px solid #333; padding: 40px; transition: transform 0.3s, border-color 0.3s;" onmouseover="this.style.transform='translateY(-5px)'; this.style.borderColor='var(--primary-red)'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#333'">
                <i class="fas fa-truck" style="font-size: 2.5rem; color: var(--primary-red); margin-bottom: 25px;"></i>
                <h3 style="color: var(--white); font-size: 1.5rem; margin-bottom: 15px; font-weight: 800;">24/7 Field Services</h3>
                <p style="color: var(--text-grey); line-height: 1.6; font-size: 0.95rem;">
                    Fully equipped mobile units on standby across Gauteng to handle emergency breakdowns day or night.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- THE "WOW" SPLIT SECTION -->
<section style="padding: 100px 5%; max-width: 1400px; margin: 0 auto;">
    <div style="display: flex; flex-wrap: wrap; gap: 60px; align-items: center;">
        
        <div style="flex: 1; min-width: 300px;" class="reveal">
            <!-- We will put an image here later, for now, a cool geometric block -->
            <div style="width: 100%; height: 400px; background: var(--mid-grey); position: relative;">
                <div style="position: absolute; bottom: -20px; right: -20px; width: 100px; height: 100px; background: var(--primary-red);"></div>
                <div style="position: absolute; top: 40px; left: 40px; color: var(--text-grey); font-size: 5rem; font-weight: 900; opacity: 0.2;">01</div>
            </div>
        </div>

        <div style="flex: 1; min-width: 300px;" class="reveal">
            <h2 style="font-size: 3rem; font-weight: 900; line-height: 1.1; margin-bottom: 25px;">WE DON'T JUST REPAIR. <br><span style="color: var(--primary-red);">WE RE-ENGINEER.</span></h2>
            <p style="color: #555; font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
                Most companies patch the problem. We rebuild hydraulic cylinders, machine custom components, and upgrade systems so they last longer and run harder. Our workshop operates with millimetre precision.
            </p>
            <ul style="list-style: none; padding: 0; margin-bottom: 40px;">
                <li style="font-size: 1.1rem; font-weight: 600; margin-bottom: 15px; display: flex; align-items: center; gap: 15px;">
                    <span style="color: var(--primary-red); font-weight: 900; font-size: 1.5rem;">/</span> On-Site Hydraulic Diagnostics
                </li>
                <li style="font-size: 1.1rem; font-weight: 600; margin-bottom: 15px; display: flex; align-items: center; gap: 15px;">
                    <span style="color: var(--primary-red); font-weight: 900; font-size: 1.5rem;">/</span> Precision General Machining
                </li>
                <li style="font-size: 1.1rem; font-weight: 600; display: flex; align-items: center; gap: 15px;">
                    <span style="color: var(--primary-red); font-weight: 900; font-size: 1.5rem;">/</span> 24/7 Mobile Breakdown Units
                </li>
            </ul>
            <a href="pages/about.php" style="font-weight: 800; text-transform: uppercase; letter-spacing: 1px; border-bottom: 3px solid var(--primary-red); padding-bottom: 5px; transition: color 0.3s;">More About Us</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>