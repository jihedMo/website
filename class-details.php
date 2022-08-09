
<?php ob_start(); ?>
<?php session_start(); ?>
<?php require_once("./includes/db.php");
include './header.php' ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Classes detail</h2>
                    <div class="bt-option">
                        <a href="./index.html">Home</a>
                        <span>Climb</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->


<!-- Class Timetable Section Begin -->
<section class="class-timetable-section class-details-timetable spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="class-details-timetable_title">
                    <h5>Classes timetable</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="class-timetable details-timetable">
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samdi</th>
                                <th>Dimanche</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="class-time">14.00 - 15.00</td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>Cours enfant</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>Cours enfant</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>Cours enfant</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>Cours enfant</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="class-time">15.00 - 16.00</td>
                                <td class="hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>-------</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>-------</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>---------</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>--------</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="class-time">16.00 - 17.30</td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>stage initiation</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>seance initiation enfant</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>Cours enfant</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>Cours enfant</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>Cours enfant</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>ouvert</h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="class-time">17.30 - 18.00</td>
                                <td class="hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>------</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>-------</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>-------</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>---------</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>--------</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="class-time">18.00 - 19.00</td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>------</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>--------</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>------</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>-------</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>-------</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="class-time">19.00 - 20.00</td>
                                <td class="hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>---------</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>------</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>---------</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>------</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>-----</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="class-time">20.00 - 21.00</td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>------</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>--------</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>------</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>-------</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>-------</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                            </tr>
                            <tr>
                                <td class="class-time">21.00 - 22.00</td>
                                <td class="hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>---------</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>------</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>---------</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>------</h5>
                                </td>
                                <td class="dark-bg hover-dp ts-meta">
                                    <h5>-----</h5>
                                </td>
                                <td class="hover-dp ts-meta">
                                    <h5>Fermé</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Class Timetable Section End -->

<!-- Footer Section Begin -->
<?php require_once('./footer.php'); ?>
