<?php
$content = file_get_contents('resources/views/admin/dashboard.blade.php');
$start = strpos($content, '<header class="mb-8 fade-in">');
$end = strpos($content, '</div>', strpos($content, '<!-- POPULAR MENU TABLE -->') + 100);
// Actually let's just find the closing main tag
$end = strpos($content, '</main>');
$body = substr($content, $start, $end - $start);
// The body has an extra </div> for the p-8 div that we shouldn't include, let's just take until before </main> then remove the last </div>
$body = preg_replace('/<\/div>\s*$/', '', $body);

$script_start = strpos($content, '<script>');
$script_end = strpos($content, '</body>');
$script = substr($content, $script_start, $script_end - $script_start);

$new_content = "@extends('layouts.admin')\n@section('title', 'Tasty Admin - Dashboard')\n@section('content')\n" . $body . "\n@endsection\n\n@push('scripts')\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js\"></script>\n" . $script . "@endpush\n";

file_put_contents('resources/views/admin/dashboard.blade.php', $new_content);
echo "Dashboard refactored.";
