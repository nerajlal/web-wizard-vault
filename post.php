<?php
// Placeholder data for blog posts
$posts = [
    1 => [
        'title' => 'My Journey into PHP Development',
        'date' => 'October 26, 2023',
        'excerpt' => 'An introduction to my journey as a PHP developer, the challenges I faced, and the things I\'ve learned along the way.',
        'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
    ],
    2 => [
        'title' => 'Why I Love Laravel',
        'date' => 'November 15, 2023',
        'excerpt' => 'A deep dive into the Laravel framework and why it has become my go-to choice for building robust and scalable web applications.',
        'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
    ],
    3 => [
        'title' => 'The Power of React and Spring Boot',
        'date' => 'December 5, 2023',
        'excerpt' => 'Exploring the powerful combination of React for the frontend and Spring Boot for the backend in modern web development.',
        'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
    ],
    4 => [
        'title' => 'A Guide to Responsive Design',
        'date' => 'January 12, 2024',
        'excerpt' => 'In this post, I share my top tips for creating beautiful and functional responsive layouts that work on all devices.',
        'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
    ],
];

$post_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$post = isset($posts[$post_id]) ? $posts[$post_id] : null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post ? htmlspecialchars($post['title']) : 'Post Not Found'; ?> - Neraj Lal S</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body class="bg-background text-foreground">

    <?php include 'partials/_navigation.php'; ?>

    <main>
        <section id="post-page" class="py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <?php if ($post): ?>
                    <article class="prose dark:prose-invert lg:prose-xl mx-auto">
                        <h1 class="bg-gradient-primary bg-clip-text text-transparent"><?php echo htmlspecialchars($post['title']); ?></h1>
                        <p class="text-muted-foreground text-sm"><?php echo htmlspecialchars($post['date']); ?></p>
                        <div><?php echo $post['content']; ?></div>
                    </article>
                <?php else: ?>
                    <div class="text-center">Post not found.</div>
                <?php endif; ?>
            </div>
        </section>
    </main>

    <?php include 'partials/_footer.php'; ?>

    <script src="public/js/app.js"></script>
</body>
</html>
