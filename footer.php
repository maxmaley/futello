</main>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <!-- Бренд и описание -->
            <div class="footer-brand">
                <a href="<?php echo home_url(); ?>" class="logo">
                    <img src="http://futello.com/wp-content/uploads/2025/08/Group-1000003458.png" 
                         alt="<?php bloginfo('name'); ?>" />
                </a>
                <p>Ваш надежный источник экспертных футбольных прогнозов и аналитики матчей.</p>
                
                <!-- Социальные сети -->
                <div class="social-links">
                    <a href="#" class="social-link" aria-label="Telegram">📱</a>
                    <a href="#" class="social-link" aria-label="Instagram">📷</a>
                    <a href="#" class="social-link" aria-label="Twitter">🐦</a>
                    <a href="#" class="social-link" aria-label="LinkedIn">💼</a>
                    <a href="#" class="social-link" aria-label="Reddit">🔗</a>
                    <a href="#" class="social-link" aria-label="VK">👥</a>
                </div>
            </div>

            <!-- Быстрые ссылки -->
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="<?php echo home_url('/predictions'); ?>">Predictions</a></li>
                    <li><a href="<?php echo home_url('/reviews'); ?>">Reviews</a></li>
                    <li><a href="<?php echo home_url('/statistics'); ?>">Statistics</a></li>
                    <li><a href="<?php echo home_url('/about'); ?>">About us</a></li>
                </ul>
            </div>

            <!-- Лиги -->
            <div class="footer-section">
                <h3>Leagues</h3>
                <ul>
                    <li><a href="#">Premier Liga</a></li>
                    <li><a href="#">La Liga</a></li>
                    <li><a href="#">Bundesliga</a></li>
                    <li><a href="#">Seria A</a></li>
                    <li><a href="#">Liga 1</a></li>
                    <li><a href="#">UCL</a></li>
                </ul>
            </div>

            <!-- Социальные сети -->
            <div class="footer-section">
                <h3>Social Media</h3>
                <ul>
                    <li><a href="#">Telegram</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">X (Twitter)</a></li>
                    <li><a href="#">LinkedIn</a></li>
                    <li><a href="#">Reddit</a></li>
                    <li><a href="#">VK</a></li>
                </ul>
            </div>
        </div>

        <!-- Нижняя часть футера -->
        <div class="footer-bottom">
            <div>
                <p>&copy; <?php echo date('Y'); ?> Futello. All rights reserved.</p>
                <p>18+ only. Gamble responsibly. This website provides entertainment and information purposes only. Predictions are based on statistical analysis and are not guaranteed to be accurate.</p>
            </div>
            
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms</a>
                <a href="#">Responsible Gambling</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
