<?php
$cust_tot_entries = 0; // Example value, replace with your actual logic
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Button Control</title>
    <style>
        .disabled {
            pointer-events: none;
            opacity: 0.5;
        }
    </style>
</head>
<body>

<section id="Gira" style="cursor: pointer;" class="spin <?php echo $cust_tot_entries < 1 ? 'disabled' : ''; ?>">SPIN ME</section>

<script>
   // No additional JavaScript needed for disabling, as PHP handles it
</script>

</body>
</html>




<?php
$cust_tot_entries = 0; // Example value, replace with your actual logic
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Button Control</title>
    <style>
        .disabled {
            pointer-events: none;
            opacity: 0.5;
        }
    </style>
</head>
<body>

<section id="Gira" style="cursor: pointer;" class="spin <?php echo $cust_tot_entries < 1 ? 'disabled' : ''; ?>">SPIN ME</section>

<script>
   /* ****************************** */
    /* *     start disable button   * */
    /* ****************************** */

    // No additional JS needed since PHP handles the disabling

   /* ****************************** */
    /* *     end disable button     * */
    /* ****************************** */

   /* ****************************** */
    /* *     start enable  button   * */
    /* ****************************** */

    // Example JS to enable button after 12 seconds (if needed in another context)
    setTimeout(function() {
        document.getElementById("Gira").classList.remove("disabled");
    }, 12000);

   /* ****************************** */
    /* *     end enable  button     * */
    /* ****************************** */

</script>

</body>
</html>
