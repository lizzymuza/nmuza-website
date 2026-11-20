<?php include '../includes/header.php'; ?>

<main style="background-color: var(--dark-black); min-height: 90vh; padding: 100px 5%;">
    <div style="max-width: 1200px; margin: 0 auto;">
        
        <div style="margin-bottom: 80px;" class="reveal">
            <h5 style="color: var(--primary-red); font-weight: 800; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 15px;">Get In Touch</h5>
            <h1 style="font-size: 4rem; color: var(--white); font-weight: 900; text-transform: uppercase; line-height: 1.1;">CONTACT <br><span style="color: transparent; -webkit-text-stroke: 2px var(--primary-red);">THE TEAM.</span></h1>
        </div>

        <div style="display: flex; flex-wrap: wrap; gap: 60px;">
            
            <!-- Contact Info -->
            <div style="flex: 1; min-width: 300px;" class="reveal">
                <h2 style="font-size: 2rem; color: var(--white); margin-bottom: 30px; font-weight: 800; text-transform: uppercase;">Direct Contact</h2>
                
                <div style="margin-bottom: 30px;">
                    <p style="color: var(--primary-red); font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px;">Location</p>
                    <p style="color: var(--text-grey); font-size: 1.1rem;">8 Moller Street, Workshop No. MU6<br>Germiston, 1401, Johannesburg</p>
                </div>

                <div style="margin-bottom: 30px;">
                    <p style="color: var(--primary-red); font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px;">24/7 Phone & WhatsApp</p>
                    <p style="color: var(--text-grey); font-size: 1.1rem;">+27 84 309 7260</p>
                </div>

                <div style="margin-bottom: 30px;">
                    <p style="color: var(--primary-red); font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px;">Email</p>
                    <p style="color: var(--text-grey); font-size: 1.1rem;">nelmuza77@gmail.com</p>
                </div>
            </div>

            <!-- Contact Form (Placeholder for now) -->
            <div style="flex: 1; min-width: 300px;" class="reveal">
                <form style="background: #111; padding: 40px; border: 1px solid #333;">
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; color: var(--white); margin-bottom: 8px; font-weight: 600;">Name</label>
                        <input type="text" style="width: 100%; padding: 15px; background: #0a0a0a; border: 1px solid #333; color: var(--white); font-family: inherit; outline: none;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; color: var(--white); margin-bottom: 8px; font-weight: 600;">Email</label>
                        <input type="email" style="width: 100%; padding: 15px; background: #0a0a0a; border: 1px solid #333; color: var(--white); font-family: inherit; outline: none;">
                    </div>
                    <div style="margin-bottom: 30px;">
                        <label style="display: block; color: var(--white); margin-bottom: 8px; font-weight: 600;">Message</label>
                        <textarea rows="4" style="width: 100%; padding: 15px; background: #0a0a0a; border: 1px solid #333; color: var(--white); font-family: inherit; outline: none; resize: vertical;"></textarea>
                    </div>
                    <button type="submit" style="width: 100%; background: var(--primary-red); color: var(--white); padding: 15px; border: none; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; cursor: pointer; transition: background 0.3s;">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>