<?php
/**
 * Главная страница Futello
 * Template Name: Futello Home Page
 */

get_header(); ?>

<div class="futello-homepage">
    
    <!-- Hero Section -->
    <section class="futello-hero">
        <div class="container">
            <div class="futello-hero-content">
                <h1 class="futello-hero-title">
                    The First Football Media<br>
                    <span class="futello-hero-accent">Built to Predict</span>
                </h1>
                <p class="futello-hero-description">
                    Get match previews, score predictions, and post-game recaps — created by experienced 
                    analysts and a high-performance prediction engine trained on thousands of matches, real-time data, and betting odds.
                </p>
                <a href="#upcoming-matches" class="futello-btn futello-btn-primary">
                    View today predictions
                </a>
            </div>
        </div>
    </section>

    <!-- Upcoming Top Matches Section -->
    <section id="upcoming-matches" class="futello-matches-section">
        <div class="container">
            <div class="futello-section-header">
                <div class="futello-section-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect x="3" y="4" width="18" height="18" rx="2" fill="#00D4AA"/>
                        <path d="M12 8v8m-4-4h8" stroke="white" stroke-width="2"/>
                    </svg>
                </div>
                <h2 class="futello-section-title">Upcoming Top Matches</h2>
            </div>
            
            <div class="futello-matches-grid">
                <?php
                // Получаем фейковые данные матчей (пока)
                for ($i = 1; $i <= 9; $i++) {
                    $match_data = futello_get_match_data();
                    $dates = ['21 May 07', '22 May 07', '23 May 07'];
                    $times = ['21:45', '19:30', '22:00'];
                    $random_date = $dates[array_rand($dates)];
                    $random_time = $times[array_rand($times)];
                ?>
                <div class="futello-match-card">
                    <div class="futello-match-date"><?php echo $random_date; ?> • <?php echo $random_time; ?></div>
                    
                    <div class="futello-match-teams">
                        <div class="futello-team futello-team-home">
                            <img src="<?php echo $match_data['home_logo']; ?>" alt="<?php echo $match_data['home_team']; ?>" class="futello-team-logo">
                        </div>
                        
                        <div class="futello-match-vs">
                            <span class="futello-vs-text">VS</span>
                        </div>
                        
                        <div class="futello-team futello-team-away">
                            <img src="<?php echo $match_data['away_logo']; ?>" alt="<?php echo $match_data['away_team']; ?>" class="futello-team-logo">
                        </div>
                    </div>
                    
                    <div class="futello-match-names">
                        <div class="futello-team-name"><?php echo $match_data['home_team']; ?></div>
                        <div class="futello-team-name"><?php echo $match_data['away_team']; ?></div>
                    </div>
                    
                    <a href="/match/<?php echo $i; ?>" class="futello-btn futello-btn-outline futello-btn-small">
                        View prediction
                    </a>
                </div>
                <?php } ?>
            </div>
            
            <div class="futello-section-footer">
                <a href="/matches" class="futello-btn futello-btn-primary">More matches</a>
            </div>
        </div>
    </section>

    <!-- Best Odds Section -->
    <section class="futello-odds-section">
        <div class="container">
            <div class="futello-odds-card">
                <h3 class="futello-odds-title">Best Odds for Today's Matches</h3>
                <p class="futello-odds-description">Compare odds from top bookmakers and get the best value for your predictions.</p>
                <div class="futello-odds-buttons">
                    <a href="#" class="futello-odds-btn">Bet365</a>
                    <a href="#" class="futello-odds-btn">William Hill</a>
                    <a href="#" class="futello-odds-btn active">Betfair</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Match Analysis & News Section -->
    <section class="futello-news-section">
        <div class="container">
            <div class="futello-section-header">
                <div class="futello-section-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect x="3" y="4" width="18" height="18" rx="2" fill="#00D4AA"/>
                        <path d="M7 8h10M7 12h10M7 16h6" stroke="white" stroke-width="2"/>
                    </svg>
                </div>
                <h2 class="futello-section-title">Match Analysis & News</h2>
            </div>
            
            <div class="futello-news-grid">
                <?php
                // Фейковые новости (пока)
                for ($i = 1; $i <= 9; $i++) {
                    $match_data = futello_get_match_data();
                    $news_types = ['prediction', 'analysis', 'news'];
                    $news_type = $news_types[array_rand($news_types)];
                    
                    // Разные типы карточек для разнообразия
                    if ($i % 3 == 1) { // Большая карточка с градиентом
                ?>
                <div class="futello-news-card futello-news-card-featured">
                    <div class="futello-news-gradient">
                        <div class="futello-news-teams">
                            <div class="futello-news-team">
                                <img src="<?php echo $match_data['home_logo']; ?>" alt="<?php echo $match_data['home_team']; ?>" class="futello-news-logo">
                            </div>
                            <div class="futello-news-vs">VS</div>
                            <div class="futello-news-team">
                                <img src="<?php echo $match_data['away_logo']; ?>" alt="<?php echo $match_data['away_team']; ?>" class="futello-news-logo">
                            </div>
                        </div>
                    </div>
                    <div class="futello-news-content">
                        <h3 class="futello-news-title"><?php echo $match_data['home_team']; ?> | <?php echo $match_data['league']; ?> <?php echo $match_data['away_team']; ?></h3>
                        <p class="futello-news-excerpt">Deep analysis of the upcoming match between these two powerhouse teams. Key players, tactical approach, and betting insights.</p>
                        <div class="futello-news-meta">
                            <span class="futello-news-author">by Football Analyst</span>
                            <span class="futello-news-date">2 hours ago</span>
                            <span class="futello-news-tag">Analysis</span>
                        </div>
                    </div>
                </div>
                <?php } else { // Обычная карточка с фото ?>
                <div class="futello-news-card">
                    <div class="futello-news-image">
                        <img src="https://via.placeholder.com/300x200?text=Football+Match" alt="Match Preview">
                    </div>
                    <div class="futello-news-content">
                        <h3 class="futello-news-title"><?php echo $match_data['home_team']; ?> | <?php echo $match_data['league']; ?> <?php echo $match_data['away_team']; ?></h3>
                        <p class="futello-news-excerpt">Comprehensive match preview with team analysis, key players to watch, and expert predictions for this exciting fixture.</p>
                        <div class="futello-news-meta">
                            <span class="futello-news-author">by Football Analyst</span>
                            <span class="futello-news-date">3 hours ago</span>
                            <span class="futello-news-tag">Preview</span>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php } ?>
            </div>
            
            <div class="futello-section-footer">
                <a href="/news" class="futello-btn futello-btn-primary">More news</a>
            </div>
        </div>
    </section>

    <!-- Best Odds Bottom Section -->
    <section class="futello-odds-section futello-odds-bottom">
        <div class="container">
            <div class="futello-odds-card">
                <h3 class="futello-odds-title">Best Odds for Today's Matches</h3>
                <p class="futello-odds-description">Compare odds from top bookmakers and get the best value for your predictions.</p>
                <div class="futello-odds-buttons">
                    <a href="#" class="futello-odds-btn">Bet365</a>
                    <a href="#" class="futello-odds-btn">William Hill</a>
                    <a href="#" class="futello-odds-btn active">Betfair</a>
                </div>
            </div>
        </div>
    </section>

</div>

<style>
/* Hero Section */
.futello-hero {
    background: var(--futello-gradient);
    padding: 80px 0;
    color: white;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.futello-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
    opacity: 0.3;
}

.futello-hero-content {
    position: relative;
    z-index: 2;
    max-width: 600px;
    margin: 0 auto;
}

.futello-hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.futello-hero-accent {
    color: #00D4AA;
    display: block;
}

.futello-hero-description {
    font-size: 1.1rem;
    margin-bottom: 2rem;
    opacity: 0.9;
    line-height: 1.6;
}

/* Sections */
.futello-matches-section,
.futello-news-section {
    padding: 80px 0;
    background: #F8F9FA;
}

.futello-section-header {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 3rem;
    gap: 1rem;
}

.futello-section-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.futello-section-title {
    font-size: 2rem;
    font-weight: 600;
    color: var(--futello-dark);
    margin: 0;
}

/* Match Cards Grid */
.futello-matches-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.futello-match-card {
    background: rgba(0, 212, 170, 0.1);
    border-radius: 16px;
    padding: 1.5rem;
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid rgba(0, 212, 170, 0.2);
}

.futello-match-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 40px rgba(0, 212, 170, 0.15);
}

.futello-match-date {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 1rem;
    font-weight: 500;
}

.futello-match-teams {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 2rem;
    margin-bottom: 1rem;
}

.futello-team-logo {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid white;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.futello-vs-text {
    font-weight: 600;
    color: var(--futello-primary);
    font-size: 0.9rem;
}

.futello-match-names {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.futello-team-name {
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--futello-dark);
}

/* News Grid */
.futello-news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.futello-news-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.futello-news-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 40px rgba(0,0,0,0.15);
}

.futello-news-card-featured .futello-news-gradient {
    background: var(--futello-gradient);
    padding: 2rem;
    color: white;
    text-align: center;
}

.futello-news-teams {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1.5rem;
}

.futello-news-logo {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid white;
}

.futello-news-vs {
    font-weight: 600;
    font-size: 0.9rem;
}

.futello-news-image img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.futello-news-content {
    padding: 1.5rem;
}

.futello-news-title {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    color: var(--futello-dark);
    line-height: 1.4;
}

.futello-news-excerpt {
    color: #666;
    font-size: 0.9rem;
    line-height: 1.5;
    margin-bottom: 1rem;
}

.futello-news-meta {
    display: flex;
    align-items: center;
    gap: 1rem;
    font-size: 0.8rem;
    color: #999;
}

.futello-news-tag {
    background: var(--futello-primary);
    color: white;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    font-weight: 500;
}

/* Odds Section */
.futello-odds-section {
    padding: 2rem 0;
    background: white;
}

.futello-odds-card {
    text-align: center;
    padding: 2rem;
    border: 1px solid #E5E7EB;
    border-radius: 12px;
    max-width: 800px;
    margin: 0 auto;
}

.futello-odds-title {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    color: var(--futello-dark);
}

.futello-odds-description {
    color: #666;
    margin-bottom: 1.5rem;
}

.futello-odds-buttons {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}

.futello-odds-btn {
    padding: 0.5rem 1rem;
    border: 1px solid #E5E7EB;
    border-radius: 6px;
    text-decoration: none;
    color: #666;
    font-weight: 500;
    transition: all 0.3s ease;
}

.futello-odds-btn:hover,
.futello-odds-btn.active {
    background: var(--futello-primary);
    color: white;
    border-color: var(--futello-primary);
}

/* Buttons */
.futello-btn {
    display: inline-block;
    padding: 12px 24px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    text-align: center;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
}

.futello-btn-primary {
    background: var(--futello-primary);
    color: white;
}

.futello-btn-primary:hover {
    background: #00B891;
    transform: translateY(-1px);
}

.futello-btn-outline {
    background: transparent;
    color: var(--futello-primary);
    border: 2px solid var(--futello-primary);
}

.futello-btn-outline:hover {
    background: var(--futello-primary);
    color: white;
}

.futello-btn-small {
    padding: 8px 16px;
    font-size: 0.9rem;
}

.futello-section-footer {
    text-align: center;
}

/* Responsive */
@media (max-width: 768px) {
    .futello-hero-title {
        font-size: 2.5rem;
    }
    
    .futello-matches-grid,
    .futello-news-grid {
        grid-template-columns: 1fr;
    }
    
    .futello-match-teams {
        gap: 1rem;
    }
    
    .futello-team-logo {
        width: 40px;
        height: 40px;
    }
}
</style>

<?php get_footer(); ?>
