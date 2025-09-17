<?php

// continue
// Beendet den aktuellen Schleifendurchlauf vorzeitig.

for ($i = 10; $i > 0; $i--) {
    if ($i == 7) continue;
    echo $i . ' ';  // 10 9 8 6 5 4 3 2 1
}
echo '<br>';

// Ohne geschweifte Klammer ist nur die nächste Anweisung im if


// break.
// Beendet die ganze Schleife direkt.

for ($i = 10; $i > 0; $i--) {
    if ($i == 7) break;
    echo $i . ' ';  // 10 9 8
}
echo '<br>';

