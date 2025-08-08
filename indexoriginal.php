<!-- index.php -->

<?php 
include("includes/config.php");
include("includes/header.php"); 
?>

<style>
    /* .body {
        background-color: #c6ddf4 !important;
    } */
    .about-section {
        padding: 40px 20px;
    }
    .about-table {
        width: 100%;
        margin-bottom: 40px;
    }
    .about-table td {
        vertical-align: middle;
        padding: 20px;
    }

    .value-label {
        font-size: 26pt;
        font-weight: bold;
        color: #002060;
        text-align: center;
    }
    .value-icon {
        text-align: center;
        padding: 10px;
    }
    .value-icon img {
        height: 100px;
    }
    .our-work-title {
        font-size: 72pt;
        color: #C00000;
        text-align: center;
        font-weight: bold;
    }
    .our-work-box {
        text-align: center;
        font-size: 26pt;
        font-weight: bold;
        padding: 20px;
    }
    .green-text { color: #275317; }
    .brown-text { color: #80350E; }
</style>

    <!-- Accountability Section -->
    
    <div class="container mission-section">

        <div class="mission-block">
            <div class="mission-image">
                <img src="assets/images/about/happyfamily.png" alt="Accountability" class="img-fluid rounded">
            </div>
            <div class="mission-text">
                <h3 class="text-success">Our Community...</h3>
                <h3 class="text-success">         ......Our Hope</h3>
            </div> 
        </div>

        <!-- Share & Care Section -->
        <div class="mission-block">
            <div class="mission-text">
                <h3 class="text-primary">Share & Care</h3>
                <p><strong>SKJSS</strong> is established to provide direct assistance to individuals and communities in need, such as healthcare, education, manav rahat, jivdaya and/or disaster relief. SKJSS advocates the Women empowerment, Yuva shakti and Cultural preservations of our traditions and heritage.</p>
            </div>
            <div class="mission-image">
                <img  src="assets/images/about/sharecare.png" alt="Share & Care" class="img-fluid rounded">
            </div>
        </div>

        <hr>
        <!-- Table 3: Values -->
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

        <!-- Table 4: Our Work Section with Counter Animation -->
        <table class="about-table text-center">
            <tr>
                <div class="our-work-title mb-4">Our Work</div>
            </tr>
            <tr>
                <td
                    <div class="col-md-4 mb-3">
                        <div class="our-work-box green-text">
                            <div class="counter" data-target="1982">0</div>
                            Community Members
                        </div>
                    </div>
                </td>
                <td
                    <div class="col-md-4 mb-3">
                        <div class="our-work-box brown-text">
                            <div class="counter" data-target="14">0</div>
                            Samuh Lagan,<br>
                            <div class="counter" data-target="183">0</div>
                            Couples
                        </div>
                    </div>
                </td>
                <td
                    <div class="col-md-4 mb-3">
                        <div class="our-work-box green-text">
                            <div class="counter" data-target="86">0</div>
                            Community Events & Seminars
                        </div>
                    </div>
                </td>

            </tr>
        </table>

    </div>

</div>

<!-- Counter Animation Script -->
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
</script>

<?php include("includes/footer.php"); ?>
