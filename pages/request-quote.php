<?php include '../includes/header.php'; ?>

<main style="background-color: var(--dark-black); min-height: 90vh; padding: 100px 5%;">
    <div style="max-width: 800px; margin: 0 auto;">
        
        <div style="margin-bottom: 60px; text-align: center;" class="reveal">
            <h5 style="color: var(--primary-red); font-weight: 800; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 15px;">Get a Quote</h5>
            <h1 style="font-size: 3.5rem; color: var(--white); font-weight: 900; text-transform: uppercase; line-height: 1.1;">REQUEST <br><span style="color: transparent; -webkit-text-stroke: 2px var(--primary-red);">SERVICE.</span></h1>
            <p style="color: var(--text-grey); margin-top: 20px; font-size: 1.1rem;">Fill out the details below and our team will get back to you promptly with a quote or emergency response.</p>
        </div>

        <form style="background: #111; padding: 50px; border: 1px solid #333;" class="reveal">
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; color: var(--white); margin-bottom: 8px; font-weight: 600;">Full Name *</label>
                    <input type="text" required style="width: 100%; padding: 15px; background: #0a0a0a; border: 1px solid #333; color: var(--white); font-family: inherit; outline: none;">
                </div>
                <div>
                    <label style="display: block; color: var(--white); margin-bottom: 8px; font-weight: 600;">Company Name</label>
                    <input type="text" style="width: 100%; padding: 15px; background: #0a0a0a; border: 1px solid #333; color: var(--white); font-family: inherit; outline: none;">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                <div>
                    <label style="display: block; color: var(--white); margin-bottom: 8px; font-weight: 600;">Phone Number *</label>
                    <input type="tel" required style="width: 100%; padding: 15px; background: #0a0a0a; border: 1px solid #333; color: var(--white); font-family: inherit; outline: none;">
                </div>
                <div>
                    <label style="display: block; color: var(--white); margin-bottom: 8px; font-weight: 600;">Email Address *</label>
                    <input type="email" required style="width: 100%; padding: 15px; background: #0a0a0a; border: 1px solid #333; color: var(--white); font-family: inherit; outline: none;">
                </div>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; color: var(--white); margin-bottom: 8px; font-weight: 600;">Service Required *</label>
                <select required style="width: 100%; padding: 15px; background: #0a0a0a; border: 1px solid #333; color: var(--white); font-family: inherit; outline: none;">
                    <option value="">-- Select a Service --</option>
                    <option value="Hydraulic Repairs">Hydraulic Cylinder Repairs</option>
                    <option value="General Machining">General Machining</option>
                    <option value="Field Services">24/7 Mobile Field Service</option>
                    <option value="Other">Other / Not Sure</option>
                </select>
            </div>

            <div style="margin-bottom: 40px;">
                <label style="display: block; color: var(--white); margin-bottom: 8px; font-weight: 600;">Details of the Job *</label>
                <textarea rows="5" required style="width: 100%; padding: 15px; background: #0a0a0a; border: 1px solid #333; color: var(--white); font-family: inherit; outline: none; resize: vertical;" placeholder="Please describe the issue or the equipment you need serviced..."></textarea>
            </div>

            <button type="submit" style="width: 100%; background: var(--primary-red); color: var(--white); padding: 18px; border: none; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; font-size: 1.1rem; cursor: pointer; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">Submit Request</button>

        </form>
    </div>
</main>

<?php include '../includes/footer.php'; ?>