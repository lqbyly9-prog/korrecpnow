<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sellrecipeonme | Authentic Japanese Food Recipes & HD Videos</title>
    <style>
        :root {
            --primary: #dc2626;         /* Vibrant Red */
            --primary-dark: #991b1b;    /* Deep Crimson/Dark Red */
            --primary-light: #fca5a5;   /* Soft Red/Pinkish Accent */
            --primary-bg: #fef2f2;      /* Light Soft Warm Red Background */
            --secondary: #111827;       /* Dark Charcoal Accent */
            --card-bg: #ffffff;
            --text-dark: #1f2937;
            --text-muted: #4b5563;
            --border: #f87171;          /* Red Border Accent */
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
            background-color: var(--primary-bg);
            color: var(--text-dark);
            line-height: 1.6;
            scroll-behavior: smooth;
        }

        /* Navigation Header */
        header {
            background-color: var(--primary-dark);
            color: #ffffff;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .nav-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 900;
            color: #ffffff;
            text-decoration: none;
            letter-spacing: -0.5px;
        }

        .logo span {
            color: var(--primary-bg);
            background: var(--secondary);
            padding: 0.2rem 0.6rem;
            border-radius: 6px;
            margin-left: 2px;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 1.5rem;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.95rem;
            transition: color 0.2s ease;
        }

        nav a:hover {
            color: var(--primary-light);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(153, 27, 27, 0.88), rgba(17, 24, 39, 0.85)), 
                        url('https://images.unsplash.com/photo-1579871494447-9811cf80d66c?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            color: #ffffff;
            padding: 9rem 2rem;
            text-align: center;
        }

        .hero-content {
            max-width: 900px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3.8rem;
            font-weight: 900;
            line-height: 1.15;
            margin-bottom: 1.2rem;
            text-shadow: 0 2px 10px rgba(0,0,0,0.5);
        }

        .hero p {
            font-size: 1.3rem;
            color: var(--primary-light);
            margin-bottom: 2.5rem;
        }

        .cta-btn {
            display: inline-block;
            background-color: var(--primary);
            color: #ffffff;
            padding: 1.2rem 3rem;
            border-radius: 50px;
            font-weight: 800;
            font-size: 1.15rem;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(220, 38, 38, 0.5);
            border: 2px solid #ef4444;
        }

        .cta-btn:hover {
            background-color: #ef4444;
            transform: translateY(-3px);
            box-shadow: 0 6px 25px rgba(220, 38, 38, 0.7);
        }

        /* Features Bar */
        .features-bar {
            background-color: #fee2e2;
            border-bottom: 2px solid var(--border);
            padding: 2.5rem 2rem;
        }

        .features-grid {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .feature-item h3 {
            color: var(--primary-dark);
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .feature-item p {
            color: var(--text-dark);
            font-size: 0.95rem;
        }

        /* Section Layouts */
        .section {
            padding: 6rem 2rem;
            max-width: 1280px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 3.5rem;
        }

        .section-header h2 {
            font-size: 2.6rem;
            color: var(--primary-dark);
            margin-bottom: 0.8rem;
        }

        .section-header p {
            color: var(--text-muted);
            font-size: 1.15rem;
        }

        /* Catalog Grid */
        .recipe-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
        }

        .recipe-card {
            background-color: var(--card-bg);
            border: 2px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 12px rgba(153, 27, 27, 0.1);
        }

        .recipe-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(153, 27, 27, 0.25);
        }

        .recipe-img {
            height: 230px;
            background-size: cover;
            background-position: center;
        }

        .card-body {
            padding: 1.8rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .recipe-tag {
            align-self: flex-start;
            background-color: #fee2e2;
            color: var(--primary-dark);
            font-size: 0.8rem;
            font-weight: 800;
            padding: 0.3rem 0.9rem;
            border-radius: 20px;
            text-transform: uppercase;
            margin-bottom: 0.8rem;
        }

        .recipe-card h3 {
            font-size: 1.35rem;
            color: var(--secondary);
            margin-bottom: 0.6rem;
        }

        .recipe-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1.2rem;
            border-top: 1px solid #fee2e2;
        }

        .price {
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--primary-dark);
        }

        .buy-btn {
            background-color: var(--primary);
            color: #ffffff;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 800;
            text-decoration: none;
            font-size: 0.95rem;
            transition: background 0.2s ease;
        }

        .buy-btn:hover {
            background-color: var(--primary-dark);
        }

        /* 15 Videos Section */
        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }

        .video-card {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .video-wrapper video {
            width: 100%;
            height: 190px;
            object-fit: cover;
            background-color: #000;
        }

        .video-info {
            padding: 1.2rem;
        }

        .video-info h4 {
            font-size: 1.05rem;
            color: var(--primary-dark);
            margin-bottom: 0.3rem;
        }

        .video-info p {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        /* 150 Reviews Scrollable Container */
        .reviews-section {
            background-color: #fee2e2;
            padding: 6rem 2rem;
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
        }

        .reviews-scroll-container {
            max-width: 1280px;
            margin: 0 auto;
            max-height: 900px;
            overflow-y: auto;
            padding-right: 0.8rem;
        }

        .reviews-scroll-container::-webkit-scrollbar {
            width: 10px;
        }

        .reviews-scroll-container::-webkit-scrollbar-thumb {
            background: var(--primary-dark);
            border-radius: 5px;
        }

        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
            gap: 1.5rem;
        }

        .review-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 1.2rem;
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
            box-shadow: 0 2px 6px rgba(0,0,0,0.03);
        }

        .reviewer-profile {
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .reviewer-avatar {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--primary-dark);
        }

        .reviewer-info h5 {
            font-size: 0.95rem;
            color: var(--secondary);
        }

        .stars {
            color: var(--primary);
            font-size: 0.8rem;
        }

        .review-text {
            font-size: 0.85rem;
            color: #374151;
            font-style: italic;
        }

        /* About Section */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        @media (max-width: 768px) {
            .about-content {
                grid-template-columns: 1fr;
            }
        }

        .about-text p {
            margin-bottom: 1.2rem;
            color: var(--text-dark);
            font-size: 1.05rem;
        }

        /* Legal Blocks */
        .legal-block {
            background: #ffffff;
            border: 2px solid var(--border);
            border-radius: 16px;
            padding: 3rem;
            margin-top: 1.5rem;
            box-shadow: 0 4px 12px rgba(153, 27, 27, 0.05);
        }

        .legal-block h3 {
            font-size: 1.4rem;
            color: var(--primary-dark);
            margin: 1.8rem 0 0.8rem 0;
        }

        .legal-block h3:first-child {
            margin-top: 0;
        }

        .legal-block p, .legal-block ul {
            color: #374151;
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .legal-block ul {
            padding-left: 1.5rem;
        }

        /* Footer */
        footer {
            background-color: var(--secondary);
            color: #fef2f2;
            padding: 4rem 2rem 2rem 2rem;
        }

        .footer-container {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 2.5rem;
            margin-bottom: 3rem;
        }

        .footer-col h4 {
            color: var(--primary-light);
            font-size: 1.15rem;
            margin-bottom: 1.2rem;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 0.8rem;
        }

        .footer-col a {
            color: #fef2f2;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .footer-col a:hover {
            color: var(--primary-light);
        }

        .footer-bottom {
            max-width: 1280px;
            margin: 0 auto;
            padding-top: 2rem;
            border-top: 1px solid #374151;
            text-align: center;
            font-size: 0.85rem;
            color: #9ca3af;
        }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <div class="nav-container">
            <a href="#" class="logo">sellrecipe<span>onme</span></a>
            <nav>
                <ul>
                    <li><a href="#catalog">Japanese Recipes</a></li>
                    <li><a href="#videos">15 Cooking Videos</a></li>
                    <li><a href="#reviews">150 Reviews</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#privacy">Privacy Policy</a></li>
                    <li><a href="#disclaimer">Disclaimer</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Master Authentic Japanese Cuisine at Home</h1>
            <p>Unlock chef-crafted Japanese recipe guides, precision dashi ratios, and 15 short HD video masterclasses on sellrecipeonme.</p>
            <a href="#catalog" class="cta-btn">Explore Japanese Recipes</a>
        </div>
    </section>

    <!-- Features Bar -->
    <div class="features-bar">
        <div class="features-grid">
            <div class="feature-item">
                <h3>Instant Digital Download</h3>
                <p>Receive print-ready PDF recipe cards directly after purchase.</p>
            </div>
            <div class="feature-item">
                <h3>Authentic Taste Guarantee</h3>
                <p>Tested step-by-step ratio instructions using traditional Washoku culinary techniques.</p>
            </div>
            <div class="feature-item">
                <h3>15 HD Video Tutorials</h3>
                <p>Watch short video clips to master knife techniques, sushi rolling, and broth reductions.</p>
            </div>
        </div>
    </div>

    <!-- Recipe Catalog Section -->
    <section id="catalog" class="section">
        <div class="section-header">
            <h2>Popular Japanese Recipe Guides</h2>
            <p>Step-by-step digital cookbooks with HD imagery and precise measurement standards.</p>
        </div>

        <div class="recipe-grid">
            <!-- Card 1 -->
            <div class="recipe-card">
                <div class="recipe-img" style="background-image: url('https://images.unsplash.com/photo-1569718212165-3a8278d5f624?auto=format&fit=crop&w=800&q=80');"></div>
                <div class="card-body">
                    <span class="recipe-tag">Ramen Classic</span>
                    <h3>Rich Tonkotsu Pork Ramen</h3>
                    <p>Master slow-simmered pork bone broth, soft-boiled ajitsuke tamago eggs, and handmade springy noodles.</p>
                    <div class="card-footer">
                        <div class="price">$4.99</div>
                        <a href="#catalog" onclick="alert('Added Tonkotsu Ramen guide to sellrecipeonme!'); return false;" class="buy-btn">Buy Recipe</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="recipe-card">
                <div class="recipe-img" style="background-image: url('https://images.unsplash.com/photo-1579871494447-9811cf80d66c?auto=format&fit=crop&w=800&q=80');"></div>
                <div class="card-body">
                    <span class="recipe-tag">Sushi Masterclass</span>
                    <h3>Artisanal Nigiri & Maki Rolls</h3>
                    <p>Learn seasoned sushi rice (Shari) preparation, raw fish slicing precision, and tight roll formatting.</p>
                    <div class="card-footer">
                        <div class="price">$3.99</div>
                        <a href="#catalog" onclick="alert('Added Sushi Roll guide to sellrecipeonme!'); return false;" class="buy-btn">Buy Recipe</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="recipe-card">
                <div class="recipe-img" style="background-image: url('https://images.unsplash.com/photo-1514944288352-fffac99f0bdf?auto=format&fit=crop&w=800&q=80');"></div>
                <div class="card-body">
                    <span class="recipe-tag">Comfort Food</span>
                    <h3>Crispy Chicken Katsu Curry</h3>
                    <p>Panko-crusted chicken cutlet served over fragrant rice with a deeply savory Japanese caramelized curry glaze.</p>
                    <div class="card-footer">
                        <div class="price">$4.49</div>
                        <a href="#catalog" onclick="alert('Added Chicken Katsu Curry guide to sellrecipeonme!'); return false;" class="buy-btn">Buy Recipe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 15 Video Section -->
    <section id="videos" class="section">
        <div class="section-header">
            <h2>15 Short Japanese Cooking Videos</h2>
            <p>Bite-sized HD video techniques included with sellrecipeonme digital recipe bundles.</p>
        </div>

        <div class="video-grid">
            <div class="video-card">
                <div class="video-wrapper">
                    <video controls poster="https://images.unsplash.com/photo-1569718212165-3a8278d5f624?auto=format&fit=crop&w=500&q=80">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-info">
                    <h4>1. Crafting Dashi Stock</h4>
                    <p>Extracting umami from kombu and bonito flakes.</p>
                </div>
            </div>

            <div class="video-card">
                <div class="video-wrapper">
                    <video controls poster="https://images.unsplash.com/photo-1579871494447-9811cf80d66c?auto=format&fit=crop&w=500&q=80">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-info">
                    <h4>2. Perfect Sushi Rice (Shari)</h4>
                    <p>Washing, steaming, and rice vinegar seasoning.</p>
                </div>
            </div>

            <div class="video-card">
                <div class="video-wrapper">
                    <video controls poster="https://images.unsplash.com/photo-1514944288352-fffac99f0bdf?auto=format&fit=crop&w=500&q=80">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-info">
                    <h4>3. Panko Chicken Searing</h4>
                    <p>Crispy golden coating for Japanese Katsu.</p>
                </div>
            </div>

            <div class="video-card">
                <div class="video-wrapper">
                    <video controls poster="https://images.unsplash.com/photo-1553621042-f6e147245754?auto=format&fit=crop&w=500&q=80">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-info">
                    <h4>4. Nigiri Fish Slicing</h4>
                    <p>Single-stroke knife angles for raw fish.</p>
                </div>
            </div>

            <div class="video-card">
                <div class="video-wrapper">
                    <video controls poster="https://images.unsplash.com/photo-1617196034796-73dfa7b1fd56?auto=format&fit=crop&w=500&q=80">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-info">
                    <h4>5. Teriyaki Glaze Reduction</h4>
                    <p>Balancing mirin, soy sauce, and sake.</p>
                </div>
            </div>

            <div class="video-card">
                <div class="video-wrapper">
                    <video controls poster="https://images.unsplash.com/photo-1563245372-f21724e3856d?auto=format&fit=crop&w=500&q=80">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-info">
                    <h4>6. Tempura Batter Whisking</h4>
                    <p>Ice-cold batter for light crispy shrimp.</p>
                </div>
            </div>

            <div class="video-card">
                <div class="video-wrapper">
                    <video controls poster="https://images.unsplash.com/photo-1541544741938-0af808871cc0?auto=format&fit=crop&w=500&q=80">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-info">
                    <h4>7. Tamagoyaki Omelet Rolling</h4>
                    <p>Layering thin egg sheets in rectangular pan.</p>
                </div>
            </div>

            <div class="video-card">
                <div class="video-wrapper">
                    <video controls poster="https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=500&q=80">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-info">
                    <h4>8. Gyoza Pleating Method</h4>
                    <p>Crispy bottom pan-fry dumpling technique.</p>
                </div>
            </div>

            <div class="video-card">
                <div class="video-wrapper">
                    <video controls poster="https://images.unsplash.com/photo-1512058564366-18510be2db19?auto=format&fit=crop&w=500&q=80">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-info">
                    <h4>9. Yakitori Skewer Grilling</h4>
                    <p>Basting tare sauce over open flame.</p>
                </div>
            </div>

            <div class="video-card">
                <div class="video-wrapper">
                    <video controls poster="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=500&q=80">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-info">
                    <h4>10. Okonomiyaki Batter Mix</h4>
                    <p>Japanese savory cabbage pancake assembly.</p>
                </div>
            </div>

            <div class="video-card">
                <div class="video-wrapper">
                    <video controls poster="https://images.unsplash.com/photo-1589301760014-d929f3979dbc?auto=format&fit=crop&w=500&q=80">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-info">
                    <h4>11. Miso Soup Emulsification</h4>
                    <p>Dissolving miso paste without boiling away flavor.</p>
                </div>
            </div>

            <div class="video-card">
                <div class="video-wrapper">
                    <video controls poster="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=500&q=80">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-info">
                    <h4>12. Chashu Pork Belly Braise</h4>
                    <p>Tying and simmering pork for ramen topping.</p>
                </div>
            </div>

            <div class="video-card">
                <div class="video-wrapper">
                    <video controls poster="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=500&q=80">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-info">
                    <h4>13. Onigiri Rice Shaping</h4>
                    <p>Forming triangle rice balls filled with plum or salmon.</p>
                </div>
            </div>

            <div class="video-card">
                <div class="video-wrapper">
                    <video controls poster="https://images.unsplash.com/photo-1583032015879-e5022cb87c3b?auto=format&fit=crop&w=500&q=80">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-info">
                    <h4>14. Matcha Green Tea Whisking</h4>
                    <p>Creating smooth micro-foam with bamboo whisk.</p>
                </div>
            </div>

            <div class="video-card">
                <div class="video-wrapper">
                    <video controls poster="https://images.unsplash.com/photo-1498654896293-37aacf113fd9?auto=format&fit=crop&w=500&q=80">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video-info">
                    <h4>15. Sukiyaki Beef Simmer</h4>
                    <p>Sweet soy broth table cooking technique.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 150 Reviews Section -->
    <section id="reviews" class="reviews-section">
        <div class="section-header">
            <h2>150 Verified Customer Reviews</h2>
            <p>Scroll down to see real feedback from home chefs mastering Japanese cuisine with sellrecipeonme.</p>
        </div>

        <div class="reviews-scroll-container">
            <div class="reviews-grid">
                <!-- Initial Reviews with avatars -->
                <div class="review-card"><div class="reviewer-profile"><img src="https://i.pravatar.cc/100?img=33" class="reviewer-avatar"><div class="reviewer-info"><h5>Kenji Tanaka</h5><div class="stars">★★★★★</div></div></div><p class="review-text">"The Tonkotsu broth video step completely changed my home ramen game!"</p></div>
                <div class="review-card"><div class="reviewer-profile"><img src="https://i.pravatar.cc/100?img=47" class="reviewer-avatar"><div class="reviewer-info"><h5>Sophia Miller</h5><div class="stars">★★★★★</div></div></div><p class="review-text">"Sushi rice ratios are super accurate. Fantastic recipes from sellrecipeonme!"</p></div>
                <div class="review-card"><div class="reviewer-profile"><img src="https://i.pravatar.cc/100?img=12" class="reviewer-avatar"><div class="reviewer-info"><h5>Hiroshi Sato</h5><div class="stars">★★★★★</div></div></div><p class="review-text">"Instant digital PDF delivery was immediate and cleanly structured."</p></div>
                <div class="review-card"><div class="reviewer-profile"><img src="https://i.pravatar.cc/100?img=5" class="reviewer-avatar"><div class="reviewer-info"><h5>Olivia Brown</h5><div class="stars">★★★★★</div></div></div><p class="review-text">"Loved the crimson red website design and easy access to 15 short videos."</p></div>
                <div class="review-card"><div class="reviewer-profile"><img src="https://i.pravatar.cc/100?img=60" class="reviewer-avatar"><div class="reviewer-info"><h5>Liam Johnson</h5><div class="stars">★★★★★</div></div></div><p class="review-text">"Chicken Katsu curry turned out as good as my local izakaya spot!"</p></div>
                <div class="review-card"><div class="reviewer-profile"><img src="https://i.pravatar.cc/100?img=22" class="reviewer-avatar"><div class="reviewer-info"><h5>Akari Takahashi</h5><div class="stars">★★★★★</div></div></div><p class="review-text">"sellrecipeonme is my go-to platform for authentic Japanese recipes now!"</p></div>

                <!-- Dynamically generated rest of the 150 reviews -->
                <script>
                    const names = ["Aoi", "Benjamin", "Charlotte", "Daisuke", "Emma", "Fumiko", "Gabriel", "Haruto", "Isabella", "Jack", "Kaori", "Lucas", "Mei", "Noah", "Ren", "Sora", "Takumi", "Yuki", "Yuto", "Zoe"];
                    for(let i=7; i<=150; i++) {
                        let name = names[i % names.length] + " " + String.fromCharCode(65 + (i % 26)) + ".";
                        document.write(`
                            <div class="review-card">
                                <div class="reviewer-profile">
                                    <img src="https://i.pravatar.cc/100?img=${(i%70)+1}" class="reviewer-avatar">
                                    <div class="reviewer-info">
                                        <h5>${name}</h5>
                                        <div class="stars">★★★★★</div>
                                    </div>
                                </div>
                                <p class="review-text">"Review #${i}: Outstanding Japanese recipe blueprint from sellrecipeonme. The video breakdown made cooking seamless!"</p>
                            </div>
                        `);
                    }
                </script>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="about-content">
            <div class="about-text">
                <h2>About sellrecipeonme</h2>
                <p>At <strong>sellrecipeonme</strong>, our mission is to bring traditional Washoku and modern Japanese home cooking techniques to culinary enthusiasts worldwide.</p>
                <p>We break down complex dashi stocks, knife work, and marinade balances into clear digital guides, complete with HD step-by-step videos and high-definition food photography.</p>
            </div>
            <div class="recipe-img" style="height: 320px; border-radius: 16px; background-image: url('https://images.unsplash.com/photo-1579871494447-9811cf80d66c?auto=format&fit=crop&w=800&q=80');"></div>
        </div>
    </section>

    <!-- Privacy Policy Section -->
    <section id="privacy" class="section">
        <div class="section-header">
            <h2>Privacy Policy</h2>
            <p>Transparency regarding how sellrecipeonme collects and protects user data.</p>
        </div>
        <div class="legal-block">
            <h3>1. Personal Data Collection</h3>
            <p>When purchasing digital Japanese recipes on sellrecipeonme, we collect your name, email address (for PDF download delivery), and transaction reference information.</p>

            <h3>2. How We Use Information</h3>
            <p>Collected details are strictly used to fulfill digital recipe card orders, deliver access to private video links, issue invoices, and inform you of new recipe drops.</p>

            <h3>3. Payment & Data Protection</h3>
            <p>sellrecipeonme does not store or process payment card details directly on our servers. All transactions are securely encrypted via third-party payment providers.</p>

            <h3>4. Cookie Policy</h3>
            <p>We use functional cookies to optimize site navigation and maintain cart preferences during your visit to sellrecipeonme.</p>
        </div>
    </section>

    <!-- Disclaimer Section -->
    <section id="disclaimer" class="section">
        <div class="section-header">
            <h2>Recipe & Health Disclaimer</h2>
            <p>Essential legal and safety information for using sellrecipeonme content.</p>
        </div>
        <div class="legal-block">
            <h3>1. Culinary Results</h3>
            <p>While all Japanese food recipes provided by <strong>sellrecipeonme</strong> are thoroughly tested, cooking results may vary depending on stove temperatures, knife prep, and ingredient freshness.</p>

            <h3>2. Allergen & Raw Seafood Warning</h3>
            <p>Japanese cuisine frequently includes raw fish, soy, gluten, sesame, and shellfish. Users must inspect ingredient lists for potential food allergies and ensure proper raw fish handling precautions.</p>

            <h3>3. Digital Sales & Refund Policy</h3>
            <p>Due to the immediate digital nature of recipe PDFs and video access provided by sellrecipeonme, all sales are final once download access is provided.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <h4>sellrecipeonme</h4>
                <p>Authentic digital Japanese recipe guides, exact measurement blueprints, and HD video masterclasses.</p>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#catalog">Japanese Recipes</a></li>
                    <li><a href="#videos">15 HD Videos</a></li>
                    <li><a href="#reviews">150 Reviews</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Legal Info</h4>
                <ul>
                    <li><a href="#privacy">Privacy Policy</a></li>
                    <li><a href="#disclaimer">Disclaimer</a></li>
                    <li><a href="#disclaimer">Terms of Service</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 sellrecipeonme. All rights reserved. Registered Digital Japanese Recipe Marketplace.</p>
        </div>
    </footer>

</body>
</html>
