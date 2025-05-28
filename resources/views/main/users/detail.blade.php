<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Hub</title>
    <style>
        /* Global Styles */
        :root {
            --primary: #4a6fa5;
            --secondary: #ff6b6b;
            --dark: #333;
            --light: #f8f9fa;
            --gray: #6c757d;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: var(--dark);
            margin: 0;
            padding: 0;
            background-color: var(--light);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid #eee;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: var(--primary);
        }

        .auth-buttons a {
            margin-left: 15px;
            text-decoration: none;
            color: var(--gray);
        }

        .auth-buttons a:hover {
            color: var(--primary);
        }

        /* Main Content */
        .main-content {
            margin-top: 30px;
        }

        .content-title {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .meta {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            color: var(--gray);
            font-size: 14px;
        }

        .meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .meta i {
            font-size: 16px;
        }

        .content-body {
            margin: 30px 0;
            line-height: 1.8;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin: 30px 0;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .btn-save {
            background-color: var(--primary);
            color: white;
        }

        .btn-like {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
        }

        .btn-like.liked {
            color: var(--secondary);
            border-color: var(--secondary);
        }

        /* Sidebar */
        .sidebar-section {
            margin-bottom: 40px;
        }

        .sidebar-title {
            font-size: 18px;
            border-bottom: 2px solid var(--primary);
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        .related-item {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px dashed #eee;
        }

        .related-item:last-child {
            border-bottom: none;
        }

        .related-title {
            font-weight: 500;
            margin-bottom: 5px;
        }

        .related-desc {
            font-size: 14px;
            color: var(--gray);
        }

        /* Comments */
        .comments {
            margin-top: 50px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <!-- Header -->
        <header class="full-width">
            <div class="logo">ContentHub</div>
            <div class="auth-buttons">
                <a href="#">Login</a>
                <a href="#">Register</a>
            </div>
        </header>

        <!-- Main Content -->
        <main class="main-content">
            <h1 class="content-title">How to Build a Sustainable Remote Work Culture</h1>

            <div class="meta">
                <span><i class="fas fa-folder"></i> Workplace</span>
                <span><i class="fas fa-tag"></i> Remote Work</span>
                <span><i class="fas fa-user"></i> Jane Doe / Harvard Business Review</span>
            </div>

            <div class="content-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus.</p>
                <p>Praesent sagittis risus nec urna luctus sodales. Donec ultrices placerat dolor, ac ullamcorper urna imperdiet at. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>

            <div class="action-buttons">
                <button class="btn btn-save"><i class="far fa-bookmark"></i> Save</button>
                <button class="btn btn-like" id="likeBtn"><i class="far fa-heart"></i> Like</button>
            </div>

            <!-- Comments Section -->
            <div class="comments">
                <h3 class="sidebar-title">Comments</h3>
                <p>Comment feature coming soon!</p>
            </div>
        </main>

        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-section">
                <h3 class="sidebar-title">Related Content</h3>
                <div class="related-item">
                    <div class="related-title">10 Tools for Remote Teams</div>
                    <div class="related-desc">Essential apps to keep your distributed team productive</div>
                </div>
                <div class="related-item">
                    <div class="related-title">The Future of Hybrid Work</div>
                    <div class="related-desc">How companies are adapting to the new normal</div>
                </div>
            </div>

            <div class="sidebar-section">
                <h3 class="sidebar-title">Trending</h3>
                <div class="related-item">
                    <div class="related-title">Mental Health in Tech</div>
                    <div class="related-desc">Why burnout is skyrocketing and how to prevent it</div>
                </div>
            </div>
        </aside>
    </div>

    <script>
        // Like button interaction
        const likeBtn = document.getElementById('likeBtn');
        likeBtn.addEventListener('click', function() {
            this.classList.toggle('liked');
            const icon = this.querySelector('i');
            icon.classList.toggle('far');
            icon.classList.toggle('fas');
        });
    </script>
</body>

</html>