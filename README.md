# Movies  
Web app to help students and beginners improve their skills in PHP scripting.  
  
Description in *Greek* provided below.  
  
* Have you ever wanted to build a web application?  
* Integrating technologies like HTML, CSS, PHP and SQL database seems fun?  
* You attended web technologies lesson for the first time?  
  
Well, this project aims to help you start and improve your skills in PHP scripting, SQL database management and more hopefully!  
  
## General Description  
The project started in early 2019 in order for me to practice scripting while attending the coresponding course. Since i found myself interested in web development i decided to complete and share it. It includes html, css, php, a sql database and some javascript for simple front end functionality. It also calls an open source API (more info below) to work with data.  
  
## Functionality  
* Complete user Login system.  
* Complete user Signup system.  
* Insert, Update, Delete functions (MariaDB relational database).  
* Get - Post methods implementation (varietions).  
* API call and data retrieve (JSON format).  
* Responsive design.  
  
## Important notes  
In order for the app to work you need to register for a free key at http://www.omdbapi.com/  
You will find the database file to import in "developer" directory.  
The project has been developed and tested under localhost using the XAMPP distro found at https://www.apachefriends.org/  
The app was using an older versioning system, please ignore any version reference in comments or so.  
You may copy, modify and/or distribute the project without any notice but i (myself and any contributor) will NOT be held responsible for ANY security issues! Remember this app WAS NOT developed with security in mind!  
  
## Installation notes  
1. Register for a key at http://www.omdbapi.com/  
2. Place the project folder to your server web directory (e.g. "htdocs" for XAMPP) and start your server.  
3. Import the database file under "developer" directory to create the sample database and tables with a few records.  
4. Find and replace in "dbconn.php" file your database credentials and your api key in corresponding variables in "do_search.php" and "update.php".  
5. Type the url in browser (e.g. http://localhost/movies).  
6. Login using one of the user accounts provided or create one to test.  
7. Enjoy!  
  
## Στα ελληνικά..  
  
* Σε ενδιαφέρει η ανάπτυξη διαδικτυακής εφαρμογής;  
* Ο συνδιασμός τεχνολογιών διαδικτύου όπως HTML, CSS, PHP και σχεσιακή βάση ακούγεται ενδιαφέρον;  
* Πρώτη φορά στο μάθημα Διαδικτυακές Τεχνολογίες;  
  
Λοιπόν, αυτή η εφαρμογή έχει σκοπό να σε βοηθήσει να ξεκινήσεις και να βελτιώσεις τις δεξιότητές σου στην PHP, στη SQL και πιθανόν σε περισσότερα ακόμα!  
  
## Γενική περιγραφή  
Η εφαρμογή ξεκίνησε αρχές του 2019 στα πλαίσια του μαθήματος "Ανάπτυξη διαδικτυακών συστημάτων και εφαρμογών" με σκοπό την εξάσκησή μου στις scripting γλώσσες. Μιας και μου φάνηκε αρκετά ενδιαφέρον αποφάσισα να την ολοκληρώσω και να τη μοιραστώ. Περιλαμβάνει html, css, php, μια σχεσιακή ΒΔ και λίγη javascript για κάποιες λειτουργίες front end. Ακόμα αλληλεπιδρά με ένα API για να δουλέψει με δεδομένα.  
  
## Λειτουργικότητα  
* Πλήρες Login σύστημα για το χρήστη.  
* Πλήρες Signup σύστημα για το χρήστη.  
* Λειτουργίες Insert, Update, Delete (σχεσιακή ΒΔ MariaDB).  
* Εφαρμογή μεθόδων Get - Post (με παραλλαγές).  
* Κλήση API και ανάκτηση δεδομένων (από μορφή JSON).  
* Responsive σχεδιασμός.  
  
## Σημαντικές σημειώσεις  
Για να λειτουργήσει η εφαρμογή πρέπει να πάρετε κλειδί για το API δωρεάν στη διεύθυνση http://www.omdbapi.com/  
Θα βρείτε το αρχείο για εισαγωγή της βάσης στον κατάλογο "developer".  
Η εφαρμογή δημιουργήθηκε και ελέγθηκε σε περιβάλλον localhost χρησημοποιώντας το πακέτο XAMPP που βρίσκεται στη διεύθυνση https://www.apachefriends.org/  
Η εφαρμογή χρησημοποιούσε παλαιότερο σύστημα εκδόσεων, παρακαλώ αγνοείστε αναφορές σε έκδοση μέσα στον κώδικα η αλλού.  
Μπορείτε να αντιγράψετε, να επεξεργαστείτε και να αναδιανέμετε την εφαρμογή χωρίς ειδοποίηση όμως εγώ (ο εαυτός μου και κάθε συνεισφέρων σε αυτήν) ΔΕΝ θα θεωρούμεθα υπεύθυνοι για οποιοδίποτε θέμα ασφαλείας! Θυμηθείτε οτι αυτή η εφαρμογή ΔΕΝ δημιουργήθηκε με γνώμονα την ασφάλεια!  
  
## Οδηγίες εγκατάστασης  
1. Κάντε εγγραφή για κλειδί στο http://www.omdbapi.com/  
2. Τοποθέτηστε τον κατάλογο της εφαρμογής στον κατάλογο web του server σας (πχ "htdocs" για το XAMPP) και εκκινήστε το server.  
3. Κάντε εισαγωγή το αρχείο βάσης από τον κατάλογο "developer" για να δημιουργηθεί η βάση και οι πίνακες με λίγες εγγραφές.  
4. Βρείτε και αντικαταστείστε στο αρχείο "dbconn.php" τις πληροφορίες σύνδεσής σας με τη βάση και το κλειδί API στις αντίστοιχες μεταβλητές στα αρχεία "do_search.php" και "update.php".  
5. Πληκτρολογείστε τη διεύθυνση στον φυλλομετριτή (πχ http://localhost/movies).  
6. Εισέλθετε με έναν από τους παρεχόμενους λογαριασμούς χρήστη ή δημιουργείστε δικό σας για να δοκιμάσετε.  
7. Απολαύστε!  