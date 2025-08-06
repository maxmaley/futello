<?php get_header(); ?>

<!-- Hero секция -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>The First Football Media<br><span class="hero-subtitle">Built to Predict</span></h1>
            <p class="hero-description">
                Get match previews, score predictions, and post-game recaps — created by experienced 
                analysts and a high-performance prediction engine trained on thousands of matches, real-time stats, and betting odds.
            </p>
            <div class="hero-actions">
                <a href="#predictions" class="btn btn-primary btn-large">View today predictions</a>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Top Matches -->
<section class="matches-section" id="predictions">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Upcoming Top Matches</h2>
        </div>
        
        <div class="matches-grid">
            <!-- Пример матча 1 -->
            <div class="match-card">
                <div class="match-header">
                    <span class="match-time">22:00 May 20 • World • UCL</span>
                    <span class="match-league">UCL</span>
                </div>
                
                <div class="match-teams">
                    <div class="team">
                        <div class="team-logo">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Ccircle cx='16' cy='16' r='16' fill='%23AC1616'/%3E%3Ctext x='16' y='20' text-anchor='middle' fill='white' font-size='12' font-weight='bold'%3EAC%3C/text%3E%3C/svg%3E" alt="AC Milan" />
                        </div>
                        <span class="team-name">AC Milan</span>
                    </div>
                    
                    <span class="vs">VS</span>
                    
                    <div class="team">
                        <span class="team-name">FC Shakhtar Donetsk</span>
                        <div class="team-logo">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Ccircle cx='16' cy='16' r='16' fill='%23FF6B00'/%3E%3Ctext x='16' y='20' text-anchor='middle' fill='white' font-size='12' font-weight='bold'%3EFC%3C/text%3E%3C/svg%3E" alt="FC Shakhtar" />
                        </div>
                    </div>
                </div>
                
                <a href="#" class="btn btn-primary prediction-btn">View prediction</a>
            </div>

            <!-- Пример матча 2 -->
            <div class="match-card">
                <div class="match-header">
                    <span class="match-time">22:00 May 20 • World • UCL</span>
                    <span class="match-league">UCL</span>
                </div>
                
                <div class="match-teams">
                    <div class="team">
                        <div class="team-logo">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Ccircle cx='16' cy='16' r='16' fill='%23AC1616'/%3E%3Ctext x='16' y='20' text-anchor='middle' fill='white' font-size='12' font-weight='bold'%3EAC%3C/text%3E%3C/svg%3E" alt="AC Milan" />
                        </div>
                        <span class="team-name">AC Milan</span>
                    </div>
                    
                    <span class="vs">VS</span>
                    
                    <div class="team">
                        <span class="team-name">FC Shakhtar Donetsk</span>
                        <div class="team-logo">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Ccircle cx='16' cy='16' r='16' fill='%23FF6B00'/%3E%3Ctext x='16' y='20' text-anchor='middle' fill='white' font-size='12' font-weight='bold'%3EFC%3C/text%3E%3C/svg%3E" alt="FC Shakhtar" />
                        </div>
                    </div>
                </div>
                
                <a href="#" class="btn btn-primary prediction-btn">View prediction</a>
            </div>

            <!-- Пример матча 3 -->
            <div class="match-card">
                <div class="match-header">
                    <span class="match-time">22:00 May 20 • World • UCL</span>
                    <span class="match-league">UCL</span>
                </div>
                
                <div class="match-teams">
                    <div class="team">
                        <div class="team-logo">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Ccircle cx='16' cy='16' r='16' fill='%23AC1616'/%3E%3Ctext x='16' y='20' text-anchor='middle' fill='white' font-size='12' font-weight='bold'%3EAC%3C/text%3E%3C/svg%3E" alt="AC Milan" />
                        </div>
                        <span class="team-name">AC Milan</span>
                    </div>
                    
                    <span class="vs">VS</span>
                    
                    <div class="team">
                        <span class="team-name">FC Shakhtar Donetsk</span>
                        <div class="team-logo">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Ccircle cx='16' cy='16' r='16' fill='%23FF6B00'/%3E%3Ctext x='16' y='20' text-anchor='middle' fill='white' font-size='12' font-weight='bold'%3EFC%3C/text%3E%3C/svg%3E" alt="FC Shakhtar" />
                        </div>
                    </div>
                </div>
                
                <a href="#" class="btn btn-primary prediction-btn">View prediction</a>
            </div>
        </div>

        <div class="text-center mt-3">
            <a href="/predictions" class="btn btn-outline btn-large">More matches</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
