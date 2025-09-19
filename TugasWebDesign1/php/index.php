<?php
require_once "koneksi.php";

$tampilProfile = mysqli_query($conn, "SELECT profiles.id AS idpunyaprofile, profiles.photo, profiles.nama, profiles.jabatan, profiles.deskripsi, more_profiles.id_profiles,
GROUP_CONCAT(more_profiles.Skills SEPARATOR '<br>') AS skl, GROUP_CONCAT(more_profiles.Experience SEPARATOR '<br>') AS exp
FROM profiles LEFT JOIN `more_profiles` ON more_profiles.id_profiles = profiles.id WHERE profiles.id = 20");

$row = mysqli_fetch_assoc($tampilProfile);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Saya</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <!-- Section Navbar -->
    <section>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.html">About Me</a>
            <a href="contact.html">Contact</a>
            <a href="../assets/BAGAS-DWIPRASANDI_CV_2025.pdf">Download CV</a>
        </nav>
    </section>



    <!-- Section Profile -->
    <section>
        <header>
            <img src="<?= "../../Login_HTML/assets/uploads/" . $row['photo'] ?>" width="160" alt="Avatar">
            <h1><?= $row['nama'] ?></h1>
            <p><?= $row['jabatan'] ?></p>
            </img>
        </header>
    </section>
    <hr />

    <!-- Section Overview -->
    <section>
        <article style="text-align: center;">
            <h2>Overview</h2>
            <p>Hallo, Saya Bagas Dwiprasandi berdomisili Jakarta Timur. Saat ini saya seorang UI/UX Design yang sedang merintis karir di bidang Frontend Development.</p>
        </article>
        <div class="table-skill">
            <table border="2">
                <thead>
                    <tr>
                        <th>Skill</th>
                        <th>Experience</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <ul>
                                <li>UI Design</li>
                                <li>HTML (Expert)</li>
                                <li>CSS (Beginner)</li>
                                <li>Javascript (Beginner)</li>
                                <li>React JS (Beginner)</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Ex-Intern Inndivo.com</li>
                                <li>Ex-Intern HR PT. Hasura Mitra Gemilang</li>
                                <li>Coordinator of Volunteer ASIAN GAMES 2018</li>
                                <li>Crew of MalaysiaHealth Care Expo</li>
                                <li>Volunteer of Pertamina Akhlak Fest 2024</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>


    <footer>
        <p>Copyright &copy; 2025 Bagas Dwiprasandi</p>
    </footer>
    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Local JS File -->
    <script src="js/main.js"></script>
</body>

</html>