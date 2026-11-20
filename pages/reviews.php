<?php include '../includes/header.php'; ?>

<main style="background-color: var(--dark-black); min-height: 90vh; padding: 100px 5%;">
    <div style="max-width: 1200px; margin: 0 auto;">
        
        <div style="margin-bottom: 80px;" class="reveal">
            <h5 style="color: var(--primary-red); font-weight: 800; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 15px;">Client Feedback</h5>
            <h1 style="font-size: 4rem; color: var(--white); font-weight: 900; text-transform: uppercase; line-height: 1.1;">PROVEN <br><span style="color: transparent; -webkit-text-stroke: 2px var(--primary-red);">RESULTS.</span></h1>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            
            <!-- Review 1 -->
            <div class="reveal" style="background: #111; border: 1px solid #333; padding: 40px; transition: border-color 0.3s;" onmouseover="this.style.borderColor='var(--primary-red)'" onmouseout="this.style.borderColor='#333'">
                <i class="fas fa-quote-left" style="color: var(--primary-red); font-size: 2rem; margin-bottom: 20px;"></i>
                <p style="color: var(--text-grey); font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
                    "Our main production line went down on a Friday night. NMuza's mobile team was on-site within an hour and had the hydraulic cylinder rebuilt and running by Saturday morning. Absolute lifesavers."
                </p>
                <div style="font-weight: 800; color: var(--white); text-transform: uppercase;">Plant Manager</div>
                <div style="font-size: 0.85rem; color: #666; letter-spacing: 1px;">Manufacturing Sector</div>
            </div>

            <!-- Review 2 -->
            <div class="reveal" style="background: #111; border: 1px solid #333; padding: 40px; transition: border-color 0.3s;" onmouseover="this.style.borderColor='var(--primary-red)'" onmouseout="this.style.borderColor='#333'">
                <i class="fas fa-quote-left" style="color: var(--primary-red); font-size: 2rem; margin-bottom: 20px;"></i>
                <p style="color: var(--text-grey); font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
                    "Finding a machinist who can work to strict tolerances on short notice is tough. NMuza has become our go-to partner for general machining and component repairs. Highly recommended."
                </p>
                <div style="font-weight: 800; color: var(--white); text-transform: uppercase;">Workshop Supervisor</div>
                <div style="font-size: 0.85rem; color: #666; letter-spacing: 1px;">Heavy Equipment Fleet</div>
            </div>

            <!-- Review 3 -->
            <div class="reveal" style="background: #111; border: 1px solid #333; padding: 40px; transition: border-color 0.3s;" onmouseover="this.style.borderColor='var(--primary-red)'" onmouseout="this.style.borderColor='#333'">
                <i class="fas fa-quote-left" style="color: var(--primary-red); font-size: 2rem; margin-bottom: 20px;"></i>
                <p style="color: var(--text-grey); font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
                    "What sets them apart is their transparency. They diagnose the issue, explain the costs upfront, and they stick to their timelines. It's rare to find that level of integrity."
                </p>
                <div style="font-weight: 800; color: var(--white); text-transform: uppercase;">Operations Director</div>
                <div style="font-size: 0.85rem; color: #666; letter-spacing: 1px;">Mining Contractor</div>
            </div>

        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>