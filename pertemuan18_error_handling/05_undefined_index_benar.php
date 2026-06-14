<?php
if (isset($_GET['test'])) {
    if ($_GET['test'] == 0) {
        echo "Nilai parameter test adalah 0";
    } else {
        echo "Nilai parameter test bukan 0";
    }
} else {
    echo "Parameter test belum dikirim.";
}
?>