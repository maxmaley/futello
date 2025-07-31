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
                // Получаем данные матчей - сначала фейковые, потом заменим на API
                $sample_matches = futello_get_sample_matches();
                
                foreach ($sample_matches as $index => $match) {
                ?>
                <div class="futello-match-card">
                    <div class="futello-match-date"><?php echo esc_html($match['date']); ?> • <?php echo esc_html($match['time']); ?></div>
                    
                    <div class="futello-match-teams">
                        <div class="futello-team futello-team-home">
                            <img src="<?php echo esc_url($match['home_logo']); ?>" alt="<?php echo esc_attr($match['home_team']); ?>" class="futello-team-logo">
                        </div>
                        
                        <div class="futello-match-vs">
                            <span class="futello-vs-text">VS</span>
                        </div>
                        
                        <div class="futello-team futello-team-away">
                            <img src="<?php echo esc_url($match['away_logo']); ?>" alt="<?php echo esc_attr($match['away_team']); ?>" class="futello-team-logo">
                        </div>
                    </div>
                    
                    <div class="futello-match-names">
                        <div class="futello-team-name"><?php echo esc_html($match['home_team']); ?></div>
                        <div class="futello-team-name"><?php echo esc_html($match['away_team']); ?></div>
                    </div>
                    
                    <a href="<?php echo esc_url($match['prediction_url']); ?>" class="futello-btn futello-btn-outline futello-btn-small">
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
                // Получаем новости и анализы матчей
                $sample_news = futello_get_sample_news();
                
                foreach ($sample_news as $index => $article) {
                    // Каждая третья карточка будет featured
                    $is_featured = ($index % 3 == 0);
                ?>
                
                <?php if ($is_featured) { ?>
                <div class="futello-news-card futello-news-card-featured">
                    <div class="futello-news-gradient">
                        <div class="futello-news-teams">
                            <div class="futello-news-team">
                                <img src="<?php echo esc_url($article['home_logo']); ?>" alt="<?php echo esc_attr($article['home_team']); ?>" class="futello-news-logo">
                            </div>
                            <div class="futello-news-vs">VS</div>
                            <div class="futello-news-team">
                                <img src="<?php echo esc_url($article['away_logo']); ?>" alt="<?php echo esc_attr($article['away_team']); ?>" class="futello-news-logo">
                            </div>
                        </div>
                    </div>
                    <div class="futello-news-content">
                        <h3 class="futello-news-title"><?php echo esc_html($article['title']); ?></h3>
                        <p class="futello-news-excerpt"><?php echo esc_html($article['excerpt']); ?></p>
                        <div class="futello-news-meta">
                            <span class="futello-news-author">by <?php echo esc_html($article['author']); ?></span>
                            <span class="futello-news-date"><?php echo esc_html($article['date']); ?></span>
                            <span class="futello-news-tag"><?php echo esc_html($article['tag']); ?></span>
                        </div>
                    </div>
                </div>
                <?php } else { ?>
                <div class="futello-news-card">
                    <div class="futello-news-image">
                        <img src="<?php echo esc_url($article['image']); ?>" alt="<?php echo esc_attr($article['title']); ?>">
                    </div>
                    <div class="futello-news-content">
                        <h3 class="futello-news-title"><?php echo esc_html($article['title']); ?></h3>
                        <p class="futello-news-excerpt"><?php echo esc_html($article['excerpt']); ?></p>
                        <div class="futello-news-meta">
                            <span class="futello-news-author">by <?php echo esc_html($article['author']); ?></span>
                            <span class="futello-news-date"><?php echo esc_html($article['date']); ?></span>
                            <span class="futello-news-tag"><?php echo esc_html($article['tag']); ?></span>
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

<?php get_footer(); ?>
