<?php get_header(); ?>

<!-- Match Hero Section -->
<section class="match-hero">
    <div class="container">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs">
            <a href="<?php echo home_url('/predictions'); ?>">Predictions</a>
            <span>/</span>
            <span>Premier League</span>
        </div>
        
        <div class="match-hero-content">
            <div class="match-details">
                <!-- League Badge -->
                <div class="league-badge">Premier League</div>
                
                <!-- Teams and Score -->
                <div class="teams-display">
                    <div class="team-section">
                        <div class="team-logo-large">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23AC1616'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='20' font-weight='bold'%3EAC%3C/text%3E%3C/svg%3E" 
                                 alt="AC Milan" />
                        </div>
                        <h2 class="team-name-large">AC Milan</h2>
                        <div class="team-odds">1.85</div>
                    </div>
                    
                    <div class="match-info-center">
                        <div class="match-time-large">21:45</div>
                        <div class="match-date-large">May 10</div>
                        <div class="vs-large">VS</div>
                        <div class="match-odds-draw">3.3</div>
                    </div>
                    
                    <div class="team-section">
                        <div class="team-logo-large">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23FF6B00'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='18' font-weight='bold'%3EFC%3C/text%3E%3C/svg%3E" 
                                 alt="FC Shakhtar Donetsk" />
                        </div>
                        <h2 class="team-name-large">FC Shakhtar Donetsk</h2>
                        <div class="team-odds">2.76</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Area -->
<section class="single-match-content">
    <div class="container">
        <div class="content-layout">
            
            <!-- Main Content -->
            <div class="main-content-area">
                
                <!-- Tab Navigation -->
                <div class="tab-navigation">
                    <button class="tab-btn active" data-tab="prediction">Prediction</button>
                    <button class="tab-btn" data-tab="odds">Odds</button>
                    <button class="tab-btn" data-tab="info">Info</button>
                    <button class="tab-btn" data-tab="stats">Stats</button>
                    <button class="tab-btn" data-tab="standings">Standings</button>
                    <button class="share-btn" title="Share">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                            <path d="M13 2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM7.25 8a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM13 13.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                        </svg>
                    </button>
                </div>

                <!-- Tab Content -->
                <div class="tab-content">
                    
                    <!-- Prediction Tab -->
                    <div id="prediction" class="tab-panel active">
                        <div class="prediction-content">
                            
                            <!-- Author Info -->
                            <div class="prediction-author">
                                <div class="author-avatar">
                                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' viewBox='0 0 40 40'%3E%3Ccircle cx='20' cy='20' r='20' fill='%2322C55E'/%3E%3Ctext x='20' y='26' text-anchor='middle' fill='white' font-size='16' font-weight='bold'%3EMM%3C/text%3E%3C/svg%3E" alt="Mark Marko" />
                                </div>
                                <div class="author-info">
                                    <h4 class="author-name">Mark Marko</h4>
                                    <p class="author-role">Senior Football Analyst</p>
                                    <p class="publish-date">Published May 19, 2024 • 5 min read</p>
                                </div>
                            </div>

                            <!-- Prediction Analysis -->
                            <div class="prediction-analysis">
                                <p>The Premier League doesn't get much bigger than this.</p>
                                <p>Two of England's biggest clubs meet at the Emirates in a clash that could have real implications for the title race and Champions League qualification. Arsenal, sitting 2nd in the table, have quality consistent. On, are winrate from the last ten games being 70% with quality analysis and team performance tracking our expectations.</p>

                                <h3>Head-to-Head: Balance with a Red Tilt</h3>
                                <p>Their recent encounters over the past few years tell a clear and copey story of wont.</p>
                                
                                <ul class="recent-matches">
                                    <li><strong>Dec 2024: Arsenal 1-2 United</strong></li>
                                    <li><strong>Apr 2024: United 1-2 Arsenal</strong></li>
                                    <li><strong>Sep 2023: Arsenal 3-1 United</strong></li>
                                    <li><strong>Nov 2023: United 1-0 Arsenal</strong></li>
                                </ul>

                                <p>What happens after the last fifty matches has had its own narrative from late goals to midfield battles. There's no clear dominance here.</p>

                                <h3>Current Form: Arsenal Stable, United Steady</h3>
                                <div class="form-analysis">
                                    <div class="team-form">
                                        <h4>Arsenal (Last 5)</h4>
                                        <div class="form-indicators">W W W L D</div>
                                        <p>Notable results: 9-1 vs Boston 2-2 at Anfield | 1-1 Chelsea</p>
                                    </div>
                                    <div class="team-form">
                                        <h4>Manchester United (Last 5)</h4>
                                        <div class="form-indicators">D D L W W</div>
                                        <p>Notable results: 4-1 vs Brighton 2-2 vs Chelsea | 1-0 West Ham</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Final Prediction Box -->
                            <div class="final-prediction-box">
                                <div class="prediction-icon">⚽</div>
                                <h3>Final Prediction</h3>
                                <div class="prediction-result">
                                    <strong>Arsenal to Win — 1.85</strong>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Odds Tab -->
                    <div id="odds" class="tab-panel">
                        <div class="odds-table">
                            <div class="table-header">
                                <div class="header-row">
                                    <span>Partner</span>
                                    <span>1</span>
                                    <span>X</span>
                                    <span>2</span>
                                    <span>BS</span>
                                    <span>+2.5</span>
                                    <span>-2.5</span>
                                </div>
                            </div>
                            <div class="odds-rows">
                                <div class="odds-row">
                                    <div class="bookmaker">
                                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Crect width='24' height='24' fill='%230077BE'/%3E%3Ctext x='12' y='16' text-anchor='middle' fill='white' font-size='10' font-weight='bold'%3E1xBet%3C/text%3E%3C/svg%3E" alt="1xBet" />
                                        <span>1xBet</span>
                                    </div>
                                    <span class="odds-value">1.85</span>
                                    <span class="odds-value">3.3</span>
                                    <span class="odds-value">2.76</span>
                                    <span class="odds-value">1.65</span>
                                    <span class="odds-value">2.1</span>
                                    <span class="odds-value">1.8</span>
                                </div>
                                <div class="odds-row">
                                    <div class="bookmaker">
                                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Crect width='24' height='24' fill='%23FFD700'/%3E%3Ctext x='12' y='16' text-anchor='middle' fill='black' font-size='8' font-weight='bold'%3EBet365%3C/text%3E%3C/svg%3E" alt="Bet 365" />
                                        <span>Bet 365</span>
                                    </div>
                                    <span class="odds-value">1.83</span>
                                    <span class="odds-value">3.2</span>
                                    <span class="odds-value">2.71</span>
                                    <span class="odds-value">1.64</span>
                                    <span class="odds-value">2.05</span>
                                    <span class="odds-value">1.7</span>
                                </div>
                                <div class="odds-row">
                                    <div class="bookmaker">
                                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Crect width='24' height='24' fill='%23FF6B35'/%3E%3Ctext x='12' y='14' text-anchor='middle' fill='white' font-size='6' font-weight='bold'%3EMarathon%3C/text%3E%3Ctext x='12' y='20' text-anchor='middle' fill='white' font-size='6' font-weight='bold'%3EBet%3C/text%3E%3C/svg%3E" alt="Marathon Bet" />
                                        <span>Marathon Bet</span>
                                    </div>
                                    <span class="odds-value">1.81</span>
                                    <span class="odds-value">3.2</span>
                                    <span class="odds-value">2.45</span>
                                    <span class="odds-value">1.75</span>
                                    <span class="odds-value">2.2</span>
                                    <span class="odds-value">1.6</span>
                                </div>
                                <!-- More bookmakers... -->
                                <div class="odds-row">
                                    <div class="bookmaker">
                                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Crect width='24' height='24' fill='%230077BE'/%3E%3Ctext x='12' y='16' text-anchor='middle' fill='white' font-size='10' font-weight='bold'%3E1xBet%3C/text%3E%3C/svg%3E" alt="1xBet" />
                                        <span>1xBet</span>
                                    </div>
                                    <span class="odds-value">1.85</span>
                                    <span class="odds-value">3.3</span>
                                    <span class="odds-value">2.76</span>
                                    <span class="odds-value">1.65</span>
                                    <span class="odds-value">2.1</span>
                                    <span class="odds-value">1.8</span>
                                </div>
                                <div class="odds-row">
                                    <div class="bookmaker">
                                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Crect width='24' height='24' fill='%230077BE'/%3E%3Ctext x='12' y='16' text-anchor='middle' fill='white' font-size='10' font-weight='bold'%3E1xBet%3C/text%3E%3C/svg%3E" alt="1xBet" />
                                        <span>1xBet</span>
                                    </div>
                                    <span class="odds-value">1.85</span>
                                    <span class="odds-value">3.3</span>
                                    <span class="odds-value">2.76</span>
                                    <span class="odds-value">1.65</span>
                                    <span class="odds-value">2.1</span>
                                    <span class="odds-value">1.8</span>
                                </div>
                                <div class="odds-row">
                                    <div class="bookmaker">
                                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Crect width='24' height='24' fill='%230077BE'/%3E%3Ctext x='12' y='16' text-anchor='middle' fill='white' font-size='10' font-weight='bold'%3E1xBet%3C/text%3E%3C/svg%3E" alt="1xBet" />
                                        <span>1xBet</span>
                                    </div>
                                    <span class="odds-value">1.85</span>
                                    <span class="odds-value">3.3</span>
                                    <span class="odds-value">2.76</span>
                                    <span class="odds-value">1.65</span>
                                    <span class="odds-value">2.1</span>
                                    <span class="odds-value">1.8</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Info Tab -->
                    <div id="info" class="tab-panel">
                        <div class="match-info">
                            <div class="info-grid">
                                <div class="info-item">
                                    <label>Match:</label>
                                    <span>Arsenal vs Manchester United</span>
                                </div>
                                <div class="info-item">
                                    <label>Date and Time:</label>
                                    <span>June 15, 2025, 15:00 UTC</span>
                                </div>
                                <div class="info-item">
                                    <label>Location:</label>
                                    <span>London</span>
                                </div>
                                <div class="info-item">
                                    <label>Stadium:</label>
                                    <span>Emirates Stadium</span>
                                </div>
                                <div class="info-item">
                                    <label>Referee:</label>
                                    <span>Michael Oliver</span>
                                </div>
                                <div class="info-item">
                                    <label>Where to Watch:</label>
                                    <span>Sky Sports, DAZN, club platforms</span>
                                </div>
                                <div class="info-item">
                                    <label>Weather:</label>
                                    <span>20°C, clear</span>
                                </div>
                            </div>

                            <div class="latest-news">
                                <h3>Latest News:</h3>
                                <ul>
                                    <li>Arsenal extend Odegaard's contract until 2028</li>
                                    <li>Timber ruled out until August with knee injury</li>
                                    <li>Arteta: "We're ready — no room for mistakes now"</li>
                                    <li>Rashford returns to full training ahead of Arsenal clash</li>
                                    <li>Manchester United eyeing summer move for João Neves</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Tab -->
                    <div id="stats" class="tab-panel">
                        <div class="stats-content">
                            
                            <!-- Tournament Table -->
                            <div class="tournament-table">
                                <h3>Tournament table</h3>
                                <table class="league-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Team</th>
                                            <th>P</th>
                                            <th>W</th>
                                            <th>D</th>
                                            <th>L</th>
                                            <th>GD</th>
                                            <th>Pts</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="highlight">
                                            <td>1</td>
                                            <td>Real Madrid</td>
                                            <td>5</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>+6</td>
                                            <td>11</td>
                                        </tr>
                                        <tr class="highlight">
                                            <td>2</td>
                                            <td>AC Milan</td>
                                            <td>5</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>+3</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Arsenal</td>
                                            <td>5</td>
                                            <td>2</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>+2</td>
                                            <td>8</td>
                                        </tr>
                                        <tr class="highlight">
                                            <td>4</td>
                                            <td>FC Shakhtar Donetsk</td>
                                            <td>5</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>3</td>
                                            <td>-6</td>
                                            <td>4</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Last 10 Matches -->
                            <div class="last-matches">
                                <h3>Last 10 matches</h3>
                                <div class="matches-comparison">
                                    <div class="team-matches">
                                        <h4>AC Milan</h4>
                                        <div class="match-results">
                                            <div class="result win">W</div>
                                            <div class="result loss">L</div>
                                            <div class="result draw">D</div>
                                            <div class="result win">W</div>
                                            <div class="result win">W</div>
                                        </div>
                                        <!-- Individual match cards -->
                                        <div class="match-list">
                                            <div class="mini-match">
                                                <div class="teams">AC Milan vs Real Madrid</div>
                                                <div class="score">1-2</div>
                                            </div>
                                            <div class="mini-match">
                                                <div class="teams">Real Madrid vs AC Milan</div>
                                                <div class="score">3-1</div>
                                            </div>
                                            <!-- More matches... -->
                                        </div>
                                    </div>
                                    
                                    <div class="team-matches">
                                        <h4>FC Shakhtar Donetsk</h4>
                                        <div class="match-results">
                                            <div class="result loss">L</div>
                                            <div class="result draw">D</div>
                                            <div class="result win">W</div>
                                            <div class="result loss">L</div>
                                            <div class="result loss">L</div>
                                        </div>
                                        <!-- Individual match cards -->
                                        <div class="match-list">
                                            <div class="mini-match">
                                                <div class="teams">FC Shakhtar Donetsk vs Arsenal</div>
                                                <div class="score">0-2</div>
                                            </div>
                                            <div class="mini-match">
                                                <div class="teams">Real Madrid vs FC Shakhtar Donetsk</div>
                                                <div class="score">4-1</div>
                                            </div>
                                            <!-- More matches... -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Summary Statistics -->
                            <div class="summary-stats">
                                <h3>Summary statistics for the last 10 matches</h3>
                                <div class="stats-bars">
                                    <div class="stat-row">
                                        <span class="stat-label">Goals Scored</span>
                                        <div class="stat-bar">
                                            <div class="bar-fill" style="width: 70%;" data-team="milan">16</div>
                                            <div class="bar-fill right" style="width: 45%;" data-team="shakhtar">9</div>
                                        </div>
                                    </div>
                                    <div class="stat-row">
                                        <span class="stat-label">Goals conceded</span>
                                        <div class="stat-bar">
                                            <div class="bar-fill" style="width: 35%;" data-team="milan">7</div>
                                            <div class="bar-fill right" style="width: 80%;" data-team="shakhtar">18</div>
                                        </div>
                                    </div>
                                    <!-- More stats... -->
                                    <div class="stat-row">
                                        <span class="stat-label">Wins</span>
                                        <div class="stat-bar">
                                            <div class="bar-fill" style="width: 60%;" data-team="milan">6</div>
                                            <div class="bar-fill right" style="width: 20%;" data-team="shakhtar">2</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Head-to-Head -->
                            <div class="head-to-head">
                                <h3>Head-to-head</h3>
                                <div class="h2h-stats">
                                    <div class="h2h-team">
                                        <h4>AC Milan</h4>
                                        <div class="h2h-percentage">70%</div>
                                    </div>
                                    <div class="h2h-draws">
                                        <span>15%</span>
                                        <span>Draws</span>
                                    </div>
                                    <div class="h2h-team">
                                        <h4>FC Shakhtar Donetsk</h4>
                                        <div class="h2h-percentage">15%</div>
                                    </div>
                                </div>
                                
                                <!-- H2H Match History -->
                                <div class="h2h-matches">
                                    <div class="h2h-match">
                                        <span>FC Shakhtar Donetsk 1-3 AC Milan</span>
                                    </div>
                                    <div class="h2h-match">
                                        <span>FC Shakhtar Donetsk 1-3 AC Milan</span>
                                    </div>
                                    <div class="h2h-match">
                                        <span>FC Shakhtar Donetsk 1-3 AC Milan</span>
                                    </div>
                                    <div class="h2h-match">
                                        <span>FC Shakhtar Donetsk 1-3 AC Milan</span>
                                    </div>
                                    <div class="h2h-match">
                                        <span>FC Shakhtar Donetsk 1-3 AC Milan</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Standings Tab -->
                    <div id="standings" class="tab-panel">
                        <div class="standings-table">
                            <table class="league-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Team</th>
                                        <th>P</th>
                                        <th>W</th>
                                        <th>D</th>
                                        <th>L</th>
                                        <th>GF</th>
                                        <th>GA</th>
                                        <th>GD</th>
                                        <th>Pts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="champions-league">
                                        <td>1</td>
                                        <td>
                                            <div class="team-cell">
                                                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Ccircle cx='10' cy='10' r='10' fill='%23FFFFFF'/%3E%3Ctext x='10' y='13' text-anchor='middle' fill='%23000' font-size='8' font-weight='bold'%3ERM%3C/text%3E%3C/svg%3E" alt="Real Madrid" />
                                                <span>Real Madrid</span>
                                            </div>
                                        </td>
                                        <td>38</td>
                                        <td>29</td>
                                        <td>7</td>
                                        <td>2</td>
                                        <td>87</td>
                                        <td>26</td>
                                        <td>+61</td>
                                        <td>94</td>
                                    </tr>
                                    <!-- More teams... -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sidebar -->
            <div class="sidebar">
                
                <!-- Sponsored Banner -->
                <div class="ad-banner">
                    <span>Sponsored</span>
                    <div class="banner-content">
                        <h4>Betting Offers</h4>
                        <p>Compare odds and get welcome bonuses from top bookmakers.</p>
                        <a href="#" class="view-btn">View</a>
                    </div>
                </div>

                <!-- Discussion -->
                <div class="sidebar-section">
                    <div class="section-header">
                        <h3>💬 Discussion</h3>
                        <span class="rules-link">Rules</span>
                    </div>
                    
                    <div class="comments">
                        <div class="comment">
                            <div class="comment-header">
                                <span class="username">FM</span>
                                <span class="user-id">User User 12241</span>
                                <span class="time">2 hours ago</span>
                            </div>
                            <p>Great analysis! I agree with the City prediction, their home form has been incredible this season.</p>
                            <div class="comment-actions">
                                <span class="likes">👍 12</span>
                                <span class="reply">Reply</span>
                            </div>
                        </div>
                        
                        <div class="comment">
                            <div class="comment-header">
                                <span class="username">FM</span>
                                <span class="user-id">User User 12241</span>
                                <span class="time">2 hours ago</span>
                            </div>
                            <p>Great analysis! I agree with the City prediction, their home form has been incredible this season.</p>
                            <div class="comment-actions">
                                <span class="likes">👍 12</span>
                                <span class="reply">Reply</span>
                            </div>
                        </div>
                        
                        <div class="comment">
                            <div class="comment-header">
                                <span class="username">FM</span>
                                <span class="user-id">User User 12241</span>
                                <span class="time">2 hours ago</span>
                            </div>
                            <p>Great analysis! I agree with the City prediction, their home form has been incredible this season.</p>
                            <div class="comment-actions">
                                <span class="likes">👍 12</span>
                                <span class="reply">Reply</span>
                            </div>
                        </div>
                    </div>

                    <div class="comment-form">
    <input type="text" placeholder="Write your comment..." />
    <button type="submit">➤</button>
</div>
               </div>

               <!-- Browse by league -->
               <div class="sidebar-section">
                   <h3>Browse by league</h3>
                   <select class="league-select">
                       <option>Premier League</option>
                       <option>La Liga</option>
                       <option>Bundesliga</option>
                       <option>Serie A</option>
                       <option>Champions League</option>
                   </select>
                   
                   <div class="league-links">
                       <div class="league-row">
                           <span>Premier League</span>
                           <span>La Liga</span>
                       </div>
                       <div class="league-row">
                           <span>Serie A</span>
                           <span>Liga 1</span>
                       </div>
                   </div>
               </div>

               <!-- Related Predictions -->
               <div class="sidebar-section">
                   <h3>Related Predictions</h3>
                   <div class="related-matches">
                       <div class="related-match">
                           <span>Arsenal vs Chelsea</span>
                           <span class="league-tag">Premier League • May 21</span>
                       </div>
                       <div class="related-match">
                           <span>Arsenal vs Chelsea</span>
                           <span class="league-tag">Premier League • May 21</span>
                       </div>
                       <div class="related-match">
                           <span>Arsenal vs Chelsea</span>
                           <span class="league-tag">Premier League • May 21</span>
                       </div>
                   </div>
               </div>

           </div>
       </div>
   </div>
</section>

<?php get_footer(); ?>
