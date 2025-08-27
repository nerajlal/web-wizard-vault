<?php
// Placeholder data for projects
$projects = [
    1 => [
        'title' => 'Serve The Needy',
        'category' => 'Full Stack',
        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=400&fit=crop',
        'description' => 'A MERN stack platform to reduce food wastage and scarcity by connecting donors and shelters. Ensures traceability, location-based matching, etc.',
        'long_description' => 'Serve The Needy is a comprehensive MERN stack application designed to tackle the critical issues of food wastage and scarcity. By creating a seamless connection between food donors and shelters, the platform facilitates efficient food distribution to those in need. Key features include real-time inventory tracking for donors, a location-based matching system to find the nearest shelters, and a robust admin dashboard for managing the entire ecosystem. The platform ensures full traceability from donation to delivery, providing transparency and accountability. This project was built with a mobile-first approach, ensuring a great user experience on all devices.',
        'technologies' => ['MongoDB', 'Express', 'React', 'Node.js', 'GPS', 'Tailwind CSS'],
        'features' => ['Food Donation System', 'Shelter Management Portal', 'Admin Dashboard', 'Geo-based Matching', 'Real-time Tracking', 'User Authentication'],
        'github' => '#',
        'demo' => '#'
    ],
    2 => [
        'title' => 'Farming Assistant',
        'category' => 'AgroTech',
        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=400&fit=crop',
        'description' => 'A PHP-based web platform that enables farmers to sell products, manage inventory, and allow admin approval. Includes buyer and retailer modules.',
        'long_description' => 'The Farming Assistant is a web platform built with PHP and MySQL, designed to empower farmers by providing them with a direct-to-consumer sales channel. The platform includes modules for farmers to register, list their products, and manage their inventory. An admin approval system ensures the quality and authenticity of the products listed. It also features separate modules for buyers and retailers, creating a complete ecosystem for agricultural commerce. The project focuses on ease of use and accessibility for farmers who may not be tech-savvy.',
        'technologies' => ['PHP', 'JavaScript', 'MySQL', 'HTML', 'CSS', 'Bootstrap'],
        'features' => ['Farmer Registration', 'Product Listing & Management', 'Admin Approval Workflow', 'Buyer & Retailer Modules', 'Inventory Management', 'Order Processing'],
        'github' => 'https://github.com/nerajlal/farming-assistant-in-php',
        'demo' => '#'
    ],
    3 => [
        'title' => 'Social Welfare System',
        'category' => 'Charity',
        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=400&fit=crop',
        'description' => 'A Django-based portal aimed to coordinate social welfare efforts for orphans and old-age homes. Includes donor participation and integrated organization support.',
        'long_description' => 'The Social Welfare System is a portal built with Python and Django, designed to coordinate and streamline social welfare efforts. It specifically targets the needs of orphans and old-age homes, providing a platform for these organizations to register and list their requirements. The system also includes a donor participation module, allowing individuals and corporations to contribute to specific needs and track the impact of their donations. The goal of the project is to create a transparent and efficient platform for social welfare.',
        'technologies' => ['Python', 'Django', 'MySQL', 'HTML', 'CSS', 'JavaScript'],
        'features' => ['Welfare Group Management', 'Orphan & Elderly Support', 'Donation Tracking', 'Integrated Services', 'Volunteer Coordination', 'Reporting & Analytics'],
        'github' => 'https://github.com/nerajlal/socialwelfare-in-python',
        'demo' => '#'
    ],
];

$project_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$project = isset($projects[$project_id]) ? $projects[$project_id] : null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $project ? htmlspecialchars($project['title']) : 'Project Not Found'; ?> - Neraj Lal S</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body class="bg-background text-foreground">

    <?php include 'partials/_navigation.php'; ?>

    <main>
        <?php
        if ($project) {
            include 'partials/_project-details.php';
        } else {
            echo '<div class="text-center py-20">Project not found.</div>';
        }
        ?>
    </main>

    <?php include 'partials/_footer.php'; ?>

    <script src="public/js/app.js"></script>
</body>
</html>
