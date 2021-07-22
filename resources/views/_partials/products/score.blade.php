<?php
/**
 * @var float $score
 */
?>
<div class="result">
    @for($i = 1; $i <= (int)floor($score); $i++)
        <span></span>
    @endfor

    @if (floor($score) !== (float)$score)
        <span class="half"></span>
    @endif

    @for($i = (int)ceil($score); $i < 5; $i++)
        <span class="none"></span>
    @endfor
</div>
