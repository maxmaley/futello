<?php get_header(); ?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="page-header-content">
            <div class="page-title-section">
                <div class="page-title-icon">
                    <div class="icon-square"></div>
                </div>
                <h1 class="page-title">Upcoming Top Matches</h1>
            </div>
            
            <!-- Фильтры -->
            <div class="filters-section">
                <div class="filter-group">
                    <select class="filter-select" id="league-filter">
                        <option>All leagues</option>
                        <option>Premier League</option>
                        <option>La Liga</option>
                        <option>Bundesliga</option>
                        <option>Serie A</option>
                        <option>Champions League</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <select class="filter-select" id="team-filter">
                        <option>All teams</option>
                        <option>AC Milan</option>
                        <option>Real Madrid</option>
                        <option>Barcelona</option>
                        <option>Bayern Munich</option>
                    </select>
                </div>
                
                <div class="date-picker">
                    <button class="date-nav-btn" id="date-prev">❮</button>
                    <div class="current-date">
                        <span class="date-display">May 20, 2025</span>
                    </div>
                    <button class="date-nav-btn" id="date-next">❯</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Matches List -->
<section class="matches-list-section">
    <div class="container">
        
        <!-- Premier League Block -->
        <div class="league-block">
            <div class="league-header">
                <div class="league-info">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Ccircle cx='12' cy='12' r='12' fill='%23360D69'/%3E%3Ctext x='12' y='16' text-anchor='middle' fill='white' font-size='10' font-weight='bold'%3EPL%3C/text%3E%3C/svg%3E" 
                         alt="Premier League" class="league-logo" />
                    <h3 class="league-name">Premier League</h3>
                </div>
                <a href="#" class="table-btn">Table</a>
            </div>
            
            <div class="matches-table">
                <!-- Match 1 -->
                <div class="match-row">
                    <div class="match-time-col">
                        <div class="match-time">21:45</div>
                        <div class="match-date">May 20</div>
                    </div>
                    
                    <div class="match-teams-col">
                        <div class="team-item">
                            <span class="team-name">AC Milan</span>
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23AC1616'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EAC%3C/text%3E%3C/svg%3E" 
                                 alt="AC Milan" class="team-logo-small" />
                        </div>
                        
                        <span class="vs-small">VS</span>
                        
                        <div class="team-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23FF6B00'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EFC%3C/text%3E%3C/svg%3E" 
                                 alt="Shakhtar Donetsk" class="team-logo-small" />
                            <span class="team-name">Shakhtar Donetsk</span>
                        </div>
                    </div>
                    
                    <div class="prediction-col">
                        <a href="#" class="prediction-link">View prediction</a>
                    </div>
                </div>
                
                <!-- Match 2 -->
                <div class="match-row">
                    <div class="match-time-col">
                        <div class="match-time">21:45</div>
                        <div class="match-date">May 20</div>
                    </div>
                    
                    <div class="match-teams-col">
                        <div class="team-item">
                            <span class="team-name">AC Milan</span>
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23AC1616'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EAC%3C/text%3E%3C/svg%3E" 
                                 alt="AC Milan" class="team-logo-small" />
                        </div>
                        
                        <span class="vs-small">VS</span>
                        
                        <div class="team-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23FF6B00'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EFC%3C/text%3E%3C/svg%3E" 
                                 alt="Shakhtar Donetsk" class="team-logo-small" />
                            <span class="team-name">Shakhtar Donetsk</span>
                        </div>
                    </div>
                    
                    <div class="prediction-col">
                        <a href="#" class="prediction-link">View prediction</a>
                    </div>
                </div>
                
                <!-- Еще 4 матча -->
                <div class="match-row">
                    <div class="match-time-col">
                        <div class="match-time">21:45</div>
                        <div class="match-date">May 20</div>
                    </div>
                    <div class="match-teams-col">
                        <div class="team-item">
                            <span class="team-name">AC Milan</span>
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23AC1616'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EAC%3C/text%3E%3C/svg%3E" alt="AC Milan" class="team-logo-small" />
                        </div>
                        <span class="vs-small">VS</span>
                        <div class="team-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23FF6B00'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EFC%3C/text%3E%3C/svg%3E" alt="Shakhtar Donetsk" class="team-logo-small" />
                            <span class="team-name">Shakhtar Donetsk</span>
                        </div>
                    </div>
                    <div class="prediction-col">
                        <a href="#" class="prediction-link">View prediction</a>
                    </div>
                </div>
                
                <div class="match-row">
                    <div class="match-time-col">
                        <div class="match-time">21:45</div>
                        <div class="match-date">May 20</div>
                    </div>
                    <div class="match-teams-col">
                        <div class="team-item">
                            <span class="team-name">AC Milan</span>
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23AC1616'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EAC%3C/text%3E%3C/svg%3E" alt="AC Milan" class="team-logo-small" />
                        </div>
                        <span class="vs-small">VS</span>
                        <div class="team-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23FF6B00'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EFC%3C/text%3E%3C/svg%3E" alt="Shakhtar Donetsk" class="team-logo-small" />
                            <span class="team-name">Shakhtar Donetsk</span>
                        </div>
                    </div>
                    <div class="prediction-col">
                        <a href="#" class="prediction-link">View prediction</a>
                    </div>
                </div>
                
                <div class="match-row">
                    <div class="match-time-col">
                        <div class="match-time">21:45</div>
                        <div class="match-date">May 20</div>
                    </div>
                    <div class="match-teams-col">
                        <div class="team-item">
                            <span class="team-name">AC Milan</span>
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23AC1616'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EAC%3C/text%3E%3C/svg%3E" alt="AC Milan" class="team-logo-small" />
                        </div>
                        <span class="vs-small">VS</span>
                        <div class="team-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23FF6B00'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EFC%3C/text%3E%3C/svg%3E" alt="Shakhtar Donetsk" class="team-logo-small" />
                            <span class="team-name">Shakhtar Donetsk</span>
                        </div>
                    </div>
                    <div class="prediction-col">
                        <a href="#" class="prediction-link">View prediction</a>
                    </div>
                </div>
                
                <div class="match-row">
                    <div class="match-time-col">
                        <div class="match-time">21:45</div>
                        <div class="match-date">May 20</div>
                    </div>
                    <div class="match-teams-col">
                        <div class="team-item">
                            <span class="team-name">AC Milan</span>
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23AC1616'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EAC%3C/text%3E%3C/svg%3E" alt="AC Milan" class="team-logo-small" />
                        </div>
                        <span class="vs-small">VS</span>
                        <div class="team-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23FF6B00'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EFC%3C/text%3E%3C/svg%3E" alt="Shakhtar Donetsk" class="team-logo-small" />
                            <span class="team-name">Shakhtar Donetsk</span>
                        </div>
                    </div>
                    <div class="prediction-col">
                        <a href="#" class="prediction-link">View prediction</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Второй блок - Premier League (дубликат для демонстрации) -->
        <div class="league-block">
            <div class="league-header">
                <div class="league-info">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Ccircle cx='12' cy='12' r='12' fill='%23360D69'/%3E%3Ctext x='12' y='16' text-anchor='middle' fill='white' font-size='10' font-weight='bold'%3EPL%3C/text%3E%3C/svg%3E" 
                         alt="Premier League" class="league-logo" />
                    <h3 class="league-name">Premier League</h3>
                </div>
                <a href="#" class="table-btn">Table</a>
            </div>
            
            <div class="matches-table">
                <!-- 6 матчей для второго блока -->
                <div class="match-row">
                    <div class="match-time-col">
                        <div class="match-time">21:45</div>
                        <div class="match-date">May 20</div>
                    </div>
                    <div class="match-teams-col">
                        <div class="team-item">
                            <span class="team-name">AC Milan</span>
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23AC1616'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EAC%3C/text%3E%3C/svg%3E" alt="AC Milan" class="team-logo-small" />
                        </div>
                        <span class="vs-small">VS</span>
                        <div class="team-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23FF6B00'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EFC%3C/text%3E%3C/svg%3E" alt="Shakhtar Donetsk" class="team-logo-small" />
                            <span class="team-name">Shakhtar Donetsk</span>
                        </div>
                    </div>
                    <div class="prediction-col">
                        <a href="#" class="prediction-link">View prediction</a>
                    </div>
                </div>
                
                <div class="match-row">
                    <div class="match-time-col">
                        <div class="match-time">21:45</div>
                        <div class="match-date">May 20</div>
                    </div>
                    <div class="match-teams-col">
                        <div class="team-item">
                            <span class="team-name">AC Milan</span>
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23AC1616'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EAC%3C/text%3E%3C/svg%3E" alt="AC Milan" class="team-logo-small" />
                        </div>
                        <span class="vs-small">VS</span>
                        <div class="team-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23FF6B00'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EFC%3C/text%3E%3C/svg%3E" alt="Shakhtar Donetsk" class="team-logo-small" />
                            <span class="team-name">Shakhtar Donetsk</span>
                        </div>
                    </div>
                    <div class="prediction-col">
                        <a href="#" class="prediction-link">View prediction</a>
                    </div>
                </div>
                
                <div class="match-row">
                    <div class="match-time-col">
                        <div class="match-time">21:45</div>
                        <div class="match-date">May 20</div>
                    </div>
                    <div class="match-teams-col">
                        <div class="team-item">
                            <span class="team-name">AC Milan</span>
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23AC1616'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EAC%3C/text%3E%3C/svg%3E" alt="AC Milan" class="team-logo-small" />
                        </div>
                        <span class="vs-small">VS</span>
                        <div class="team-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23FF6B00'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EFC%3C/text%3E%3C/svg%3E" alt="Shakhtar Donetsk" class="team-logo-small" />
                            <span class="team-name">Shakhtar Donetsk</span>
                        </div>
                    </div>
                    <div class="prediction-col">
                        <a href="#" class="prediction-link">View prediction</a>
                    </div>
                </div>
                
                <div class="match-row">
                    <div class="match-time-col">
                        <div class="match-time">21:45</div>
                        <div class="match-date">May 20</div>
                    </div>
                    <div class="match-teams-col">
                        <div class="team-item">
                            <span class="team-name">AC Milan</span>
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23AC1616'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EAC%3C/text%3E%3C/svg%3E" alt="AC Milan" class="team-logo-small" />
                        </div>
                        <span class="vs-small">VS</span>
                        <div class="team-item">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23FF6B00'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='white' font-size='8' font-weight='bold'%3EFC%3C/text%3E%3C/svg%3E" alt="Shakhtar Donetsk" class="team-logo-small" />
                            <span class="team-name">Shakhtar Donetsk</span>
                        </div>
                    </div>
                    <div class="prediction-col">
                        <a href="#" class="prediction-link">View prediction</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
