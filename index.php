<?php
include("includes/config.php");
include("includes/header.php");
?>

<style>
    /* New styles for a proper flexbox-based layout */
    .page-layout {
        display: flex;
        justify-content: center;
        gap: 10px;
        align-items: flex-start;
        padding: 10px;
    }

    /* Style for the side panels */
    .side-panel {
        width: 350px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        background-color: #fff;
        max-height: calc(100vh - 40px); /* Keep panels within viewport height */
        overflow-y: auto;
        position: sticky; /* Keep panels in place as you scroll */
        top: 20px; /* Position them below the header */
    }
    .main-content {
        flex-grow: 1;
        max-width: 1200px;
        padding: 0 20px; /* Add some padding to the main content */
    }

    /* Carousel styles for a single, centered image */
    .carousel-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        margin: 0 auto 20px;
        text-align: center;
    }
    .carousel-wrapper {
        display: flex;
        transition: transform 1.5s ease-in-out;
    }
    .carousel-slide {
        min-width: 100%;
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
    }
    .carousel-slide img {
        width: 100%;
        max-width: 180px; /* Increased image size for better visibility */
        height: auto;
        border: 1px solid #eee;
        cursor: pointer;
    }
    
    .panel-section h5 {
        text-align: center;
        font-size: 10pt;
        margin-top: 10px;
    }
    .centered-image {
        text-align: center;
        padding: 10px;
    }
    .centered-image img {
        width: 100%;
        max-width: 180px;
        height: auto;
    }

    /* Message box styles */
    .message-box-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }
    .message-box {
        background: #fff;
        padding: 25px;
        border-radius: 8px;
        width: 400px;
        max-width: 90%;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    .message-box h5 {
        margin-top: 0;
    }
    .message-box ul {
        padding-left: 20px;
    }
    .message-box button {
        display: block;
        margin-top: 20px;
        margin-left: auto;
        cursor: pointer;
    }

    .mission-block {
        padding: 20px;
    }
    .mission-text h3 {
        font-size: 48px;
        font-weight: bold;
    }

    .mission-text p {
        font-size: 14px;
    }

    /* Existing styles from the original index.php */
    /* .about-section { padding: 40px 20px; } */
    .about-table { width: 100%; margin-bottom: 10px; }
    .about-table td { vertical-align: middle; padding: 10px; }
    .value-label { font-size: 16pt; font-weight: bold; color: #002060; text-align: center; }
    .value-icon { text-align: center; padding: 10px; }
    .value-icon img { height: 100px; }
    .our-work-title { font-size: 36pt; color: #C00000; text-align: center; font-weight: bold; }
    .our-work-box { font-size: 16px; font-weight: bold; padding: 10px; }
    .green-text { color: #275317; }
    .brown-text { color: #80350E; }
</style>

<div class="page-layout">

    <div class="side-panel left-panel">
        <div class="panel-section">
            <div class="carousel-container" data-carousel="sponsor">
                <div class="carousel-wrapper">
                    <div class="carousel-slide"><img src="assets/images/Sponsor1.jpg" alt="Sponsor 1" onclick="showAdMessage('Sponsor1')"></div>
                    <div class="carousel-slide"><img src="assets/images/Sponsor2.jpg" alt="Sponsor 2" onclick="showAdMessage('Sponsor2')"></div>
                    <div class="carousel-slide"><img src="assets/images/Sponsor3.jpg" alt="Sponsor 3" onclick="showAdMessage('Sponsor3')"></div>
                </div>
            </div>
        </div>

        <div class="panel-section">
            <div class="centered-image">
                <img src="assets/images/25years.png" alt="25 Years">
            </div>
        </div>

        <div class="panel-section">
            <div class="carousel-container" data-carousel="ad1">
                <div class="carousel-wrapper">
                    <div class="carousel-slide"><img src="assets/images/Ad1.jpg" alt="Ad 1" onclick="showAdMessage('Ad1')"></div>
                    <div class="carousel-slide"><img src="assets/images/Ad2.jpg" alt="Ad 2" onclick="showAdMessage('Ad2')"></div>
                    <div class="carousel-slide"><img src="assets/images/Ad3.jpg" alt="Ad 3" onclick="showAdMessage('Ad3')"></div>
                </div>
            </div>
 
        </div>
    </div>

    <div class="main-content">
        <div class="container mission-section">
            <div class="mission-block">
                <div class="mission-image">
                    <img src="assets/images/about/happyfamily.png" alt="Accountability" class="img-fluid rounded">
                </div>
                <div class="mission-text">
                    <h3 class="text-success">Our Community...</h3>
                    <h3 class="text-success">...Our Hope</h3>
                </div>
            </div>

            <div class="mission-block">
                <div class="mission-text">
                    <h3 class="text-primary">Share & Care</h3>
                    <p><strong><?=$org_short_name?></strong> is established to provide direct assistance to individuals and communities in need, such as healthcare, education, manav rahat, jivdaya and/or disaster relief. SKJSS advocates the Women empowerment, Yuva shakti and Cultural preservations of our traditions and heritage.</p>
                </div>
                <div class="mission-image">
                    <img src="assets/images/about/sharecare.png" alt="Share & Care" class="img-fluid rounded">
                </div>
            </div>

            <hr>
            <table class="about-table text-center">
                <tr>
                    <td class="value-icon"><img src="assets/images/about/edu_icon.png" alt="Education"></td>
                    <td class="value-icon"><img src="assets/images/about/med_icon.png" alt="Medical"></td>
                    <td class="value-icon"><img src="assets/images/about/hum_icon.png" alt="Humanitarian"></td>
                    <td class="value-icon"><img src="assets/images/about/com_icon.png" alt="Community"></td>
                </tr>
                <tr>
                    <td class="value-label">Education</td>
                    <td class="value-label" style="color:#CC6600;">Medical</td>
                    <td class="value-label">Humanitarian</td>
                    <td class="value-label" style="color:#CC6600;">Community</td>
                </tr>
            </table>

            <hr>

            <table class="about-table text-center">
                <tr>
                    <div class="our-work-title">Our Work</div>
                </tr>
                <tr>
                    <td>
                        <div class="our-work-box green-text">
                            <div class="counter" data-target="1982">0</div>
                            Community Members
                        </div>
                    </td>
                    <td>
                        <div class="our-work-box brown-text">
                            <div class="counter" data-target="14">0</div>
                            Samuh Lagan,<br>
                            <div class="counter" data-target="183">0</div>
                            Couples
                        </div>
                    </td>
                    <td>
                        <div class="our-work-box green-text">
                            <div class="counter" data-target="86">0</div>
                            Community Events & Seminars
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="side-panel right-panel">
        <div class="panel-section">
            <div class="carousel-container" data-carousel="ad2">
                <div class="carousel-wrapper">
                    <div class="carousel-slide"><img src="assets/images/Ad1.jpg" alt="Ad 1" onclick="showAdMessage('Ad1')"></div>
                    <div class="carousel-slide"><img src="assets/images/Ad2.jpg" alt="Ad 2" onclick="showAdMessage('Ad2')"></div>
                    <div class="carousel-slide"><img src="assets/images/Ad3.jpg" alt="Ad 3" onclick="showAdMessage('Ad3')"></div>
                </div>
            </div>
        </div>

        <div class="panel-section">
            <h4>News</h4>
            <ul>
                <li>AGM on 17.08.2025 at 10.30 am at Paramkeshav Baug.</li>
                <li>Sweet distribution on 27.10.2025 on eve of Diwali.</li>
                <li>Prize distribution function on 17.08.2025 at 4.00pm at PKB. Students are requested to bring the receipt.</li>
                <li>Some important information about the trust.</li>
                <li>Chikki distribution on 18.12.2025 on eve of Diwali.</li>
                <li>Swashraya Application Form is available in office btwn 10-12 am.</li>
            </ul>
        </div>

        <div class="panel-section">
            <h4>Download Section</h4>
            <ul>
                <li><a href="assets/images/forms/Notetbook-form.pdf" download>Notebook Distribution Form</a></li>
                <li><a href="assets/images/forms/Sweet-Distribution-Form.pdf" download>Mithai Distribution Form</a></li>
                <li><a href="assets/images/forms/medical-form.pdf" download>Medical Rahat Form</a></li>
                <li><a href="assets/images/forms/Prize-Distribution.pdf" download>Prize Distribution Form</a></li>
                <li><a href="assets/images/forms/gujarati-minority-form.pdf" download>Gujarati Minority Form</a></li>
                <li><a href="assets/images/forms/kaniya-muratiya-form.pdf" download>Kaniya Muratiya Form</a></li>
                <li><a href="assets/images/forms/uniform-form.pdf" download>Uniform Form</a></li>
                <li><a href="assets/images/forms/text-book-form.pdf" download>Text Book Form</a></li>
                <li><a href="assets/images/forms/Fees-Application.pdf" download>School College Fees Application</a></li>
                <li><a href="assets/images/forms/memographi-yojana.pdf" download>Memography Yojna Form</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="message-box-overlay" id="ad-message-box-overlay">
    <div class="message-box">
        <h5 id="ad-message-title">Advertiser's Instructions and Details</h5>
        <ul>
            <li>Offer is applicable till stock last or closing date whichever is earlier.</li>
            <li>Members are required to carry their Main Member’s ID card to avail the benefits of the offer.</li>
            <li>This offer can be used only one time by one member.</li>
            <li>For any suggestions/complaints please contact Trust Office.</li>
        </ul>
        <button onclick="closeAdMessage()">Close</button>
    </div>
</div>

<script>
    const counters = document.querySelectorAll('.counter');
    const options = { threshold: 0.5 };

    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const update = () => {
            const current = +counter.innerText;
            const increment = Math.ceil(target / 100);
            if (current < target) {
                counter.innerText = current + increment;
                setTimeout(update, 20);
            } else {
                counter.innerText = target;
            }
        };
        update();
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, options);

    counters.forEach(counter => {
        observer.observe(counter);
    });

    // New JavaScript for ad message box and carousel
    function showAdMessage(adId) {
        document.getElementById('ad-message-box-overlay').style.display = 'flex';
        // Send ad click to the database
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "log_ad_click.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send("ad_id=" + adId);
    }

    function closeAdMessage() {
        document.getElementById('ad-message-box-overlay').style.display = 'none';
    }

    document.addEventListener('DOMContentLoaded', () => {
        const carousels = document.querySelectorAll('.carousel-container');

        carousels.forEach(container => {
            const wrapper = container.querySelector('.carousel-wrapper');
            const slides = wrapper.querySelectorAll('.carousel-slide');
            let currentIndex = 0;

            const updateCarousel = () => {
                const offset = -currentIndex * 100;
                wrapper.style.transform = `translateX(${offset}%)`;
            };

            setInterval(() => {
                currentIndex = (currentIndex + 1) % slides.length;
                updateCarousel();
            }, 3000); // Change image every 3 seconds
        });
    });
</script>

<?php include("includes/footer.php"); ?>