<div class="main">
<h1>{$site_title} >> 過去のお知らせ</h1>

<div class="contents">
{$contents}
</div>

<div class="page">
{if $page > 0}
<a href="info.php?p={$page - 1}">←</a>
{/if}
<a href="info.php?p={$page + 1}">→</a>
</div>
</div>
