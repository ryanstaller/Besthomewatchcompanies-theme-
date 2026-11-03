<?php get_header(); ?>

<!-- ── HERO ── -->
<section class="brbo-hero">
    <div class="brbo-hero-eyebrow">
        <span style="width:6px;height:6px;border-radius:50%;background:var(--terra2);display:inline-block;animation:pulse 2s infinite;"></span>
        Independent Rankings &nbsp;&middot;&nbsp; Client-Verified Revenue Results
    </div>
    <h1 class="brbo-hero-title">Find the Best RBO Consultant<br>for <em>Your Property</em></h1>
    <p class="brbo-hero-sub">We independently rank and verify RBO consultants who help Airbnb and VRBO hosts maximize revenue — based on real client results, not who pays the most.</p>

    <div class="brbo-hero-search">
        <div class="brbo-hero-search-row">
            <input type="text" id="brbo-hero-search" placeholder="Search by name, market, or specialization..." />
            <button class="brbo-hero-search-btn" onclick="window.location.href='<?php echo esc_url(home_url('/rankings/')); ?>'">Find Consultants</button>
        </div>
    </div>

    <div style="display:flex;gap:20px;justify-content:center;flex-wrap:wrap;">
        <a href="<?php echo esc_url(home_url('/rankings/')); ?>" style="font-size:12px;font-weight:600;color:rgba(255,255,255,.4);text-decoration:none;">View All Rankings &rarr;</a>
        <a href="<?php echo esc_url(home_url('/airbnb-consultants/')); ?>" style="font-size:12px;font-weight:600;color:rgba(255,255,255,.4);text-decoration:none;">Airbnb Experts &rarr;</a>
        <a href="<?php echo esc_url(home_url('/vrbo-consultants/')); ?>" style="font-size:12px;font-weight:600;color:rgba(255,255,255,.4);text-decoration:none;">VRBO Specialists &rarr;</a>
        <a href="<?php echo esc_url(home_url('/rental-income-calculator/')); ?>" style="font-size:12px;font-weight:600;color:var(--terra2);text-decoration:none;">Income Calculator &rarr;</a>
    </div>
</section>

<!-- ── STATS ── -->
<div class="brbo-stats-bar">
    <?php foreach ([
        ['50+', 'Ranked Consultants'],
        ['Top 20', 'Markets Covered'],
        ['43%', 'Avg Revenue Lift'],
        ['100%', 'Independent'],
    ] as [$num, $label]) : ?>
    <div class="brbo-stat">
        <div class="brbo-stat-num"><?php echo $num; ?></div>
        <div class="brbo-stat-label"><?php echo $label; ?></div>
    </div>
    <?php endforeach; ?>
</div>

<!-- ── HOW IT WORKS ── -->
<section class="brbo-section" style="background:white;border-bottom:1px solid var(--border);">
    <div class="brbo-section-inner">
        <div style="text-align:center;margin-bottom:52px;">
            <div class="brbo-eyebrow">How It Works</div>
            <h2 class="brbo-section-title" style="text-align:center;">How We Rank RBO Consultants</h2>
            <p class="brbo-section-sub" style="margin:0 auto;text-align:center;">Every consultant is ranked on client-verified revenue outcomes. The Revenue Score is our signature signal.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:28px;">
            <?php foreach ([
                ['01', 'Verify Identity', 'We confirm each consultant\'s credentials, licenses, years of experience, and active client relationships.'],
                ['02', 'Collect Revenue Lift', 'Clients submit before/after revenue data. The consultant and client both verify the numbers independently.'],
                ['03', 'Rank Monthly', 'Rankings update every 30 days based on verified results, reviews, and active client engagements.'],
            ] as [$num, $title, $desc]) : ?>
            <div style="background:var(--sand);border:1px solid var(--border);border-radius:10px;padding:28px;">
                <div style="font-family:'Playfair Display',serif;font-size:3rem;font-weight:700;color:var(--border);line-height:1;margin-bottom:14px;"><?php echo $num; ?></div>
                <div style="font-size:13px;font-weight:800;color:var(--navy);text-transform:uppercase;letter-spacing:.06em;margin-bottom:8px;"><?php echo $title; ?></div>
                <div style="font-size:13px;color:var(--muted);line-height:1.7;"><?php echo $desc; ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ── TOP CONSULTANTS PREVIEW ── -->
<section class="brbo-section" style="background:var(--sand);border-bottom:1px solid var(--border);">
    <div class="brbo-section-inner">
        <div style="display:flex;align-items:flex-end;justify-content:space-between;margin-bottom:28px;flex-wrap:wrap;gap:16px;">
            <div>
                <div class="brbo-eyebrow">National Rankings</div>
                <h2 class="brbo-section-title">Top RBO Consultants in the US</h2>
            </div>
            <a href="<?php echo esc_url(home_url('/rankings/')); ?>" style="font-size:13px;font-weight:600;color:var(--terra);text-decoration:none;">View all rankings &rarr;</a>
        </div>
        <?php echo do_shortcode('[brbo_national limit="3"]'); ?>
    </div>
</section>

<!-- ── REVENUE SCORE EXPLAINER ── -->
<section class="brbo-section" style="background:white;border-bottom:1px solid var(--border);">
    <div class="brbo-section-inner" style="display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center;">
        <div>
            <div class="brbo-eyebrow">The Revenue Score</div>
            <h2 class="brbo-section-title">Why We Track Revenue Lift, Not Just Stars</h2>
            <p style="font-size:15px;color:var(--muted);line-height:1.8;margin:0 0 24px;">Star ratings tell you if someone was "nice to work with." The Revenue Score tells you if they actually made you more money. We collect before-and-after revenue data from real clients and calculate each consultant's average lift percentage.</p>
            <div style="display:flex;flex-direction:column;gap:12px;">
                <?php foreach ([
                    ['Client-verified', 'Both the consultant and the client independently submit revenue figures.'],
                    ['Before vs after', 'We compare rental income 12 months before and after the engagement.'],
                    ['Updated regularly', 'New client results update the score each month.'],
                ] as [$title, $desc]) : ?>
                <div style="display:flex;gap:12px;align-items:flex-start;">
                    <div style="width:20px;height:20px;background:var(--navy);border-radius:4px;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px;">
                        <svg width="10" height="10" viewBox="0 0 24 24" fill="var(--terra2)"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                    </div>
                    <div>
                        <div style="font-size:13px;font-weight:700;color:var(--navy);"><?php echo $title; ?></div>
                        <div style="font-size:13px;color:var(--muted);line-height:1.6;"><?php echo $desc; ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Revenue Score visual demo -->
        <div style="background:var(--sand);border:1px solid var(--border);border-radius:12px;padding:32px;text-align:center;">
            <div style="font-size:11px;font-weight:800;color:var(--terra);text-transform:uppercase;letter-spacing:.1em;margin-bottom:16px;">Example Revenue Score</div>
            <div style="background:white;border:1px solid var(--border);border-radius:10px;padding:24px;margin-bottom:16px;">
                <div style="font-family:'Playfair Display',serif;font-size:4rem;font-weight:700;color:var(--terra);line-height:1;">+43%</div>
                <div style="font-size:12px;font-weight:700;color:var(--muted);margin-top:6px;text-transform:uppercase;letter-spacing:.08em;">Avg Client Revenue Lift</div>
                <div style="font-size:11px;color:#15803d;font-weight:700;margin-top:4px;">&#10003; Client-Verified</div>
            </div>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;">
                <div style="background:white;border:1px solid var(--border);border-radius:8px;padding:14px;">
                    <div style="font-size:18px;font-weight:800;color:var(--navy);">23</div>
                    <div style="font-size:10px;color:var(--muted);font-weight:600;text-transform:uppercase;letter-spacing:.06em;">Verified Clients</div>
                </div>
                <div style="background:white;border:1px solid var(--border);border-radius:8px;padding:14px;">
                    <div style="font-size:18px;font-weight:800;color:var(--navy);">4.9&#9733;</div>
                    <div style="font-size:10px;color:var(--muted);font-weight:600;text-transform:uppercase;letter-spacing:.06em;">Avg Rating</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── FOR CONSULTANTS ── -->
<section class="brbo-section" style="background:var(--navy);">
    <div class="brbo-section-inner" style="display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center;">
        <div>
            <div class="brbo-eyebrow" style="color:rgba(192,92,46,.8);">For RBO Consultants</div>
            <h2 class="brbo-section-title" style="color:white;">Get in Front of Hosts Ready to Hire</h2>
            <p style="font-size:15px;color:rgba(255,255,255,.6);line-height:1.8;margin:0 0 28px;">Hosts come to BestRBOConsultants.com actively looking to hire. A free listing puts you in front of qualified leads in your market from day one.</p>
            <div style="display:flex;gap:12px;flex-wrap:wrap;">
                <a href="<?php echo esc_url(home_url('/apply/')); ?>" style="padding:13px 26px;background:var(--terra);color:white;border-radius:6px;font-weight:700;font-size:14px;text-decoration:none;">Apply for Free Listing</a>
                <a href="<?php echo esc_url(home_url('/rankings/')); ?>" style="padding:13px 26px;background:transparent;color:rgba(255,255,255,.7);border:1px solid rgba(255,255,255,.25);border-radius:6px;font-weight:600;font-size:14px;text-decoration:none;">View Rankings</a>
            </div>
        </div>
        <div style="display:flex;flex-direction:column;gap:10px;">
            <?php foreach ([
                ['Free to list', 'Your profile goes live and visible to searching hosts at no cost.'],
                ['Leads from day one', 'Hosts contact you directly through your profile page.'],
                ['Revenue Score badge', 'Display your verified Revenue Score on your own website.'],
                ['Climb the rankings', 'Submit verified client results to improve your score and rank.'],
            ] as [$title, $desc]) : ?>
            <div style="display:flex;gap:14px;align-items:center;padding:14px 18px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:8px;">
                <div style="width:8px;height:8px;border-radius:50%;background:var(--terra2);flex-shrink:0;"></div>
                <div>
                    <div style="font-size:13px;font-weight:700;color:white;"><?php echo $title; ?></div>
                    <div style="font-size:12px;color:rgba(255,255,255,.55);"><?php echo $desc; ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
@keyframes pulse { 0%,100%{opacity:1} 50%{opacity:.3} }
</style>

<?php get_footer(); ?>
