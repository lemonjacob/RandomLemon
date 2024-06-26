<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head><title>Random Lemon</title><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"></head>';
$apikey = "";
$emojis = [
    "😀", "😃", "😄", "😁", "😆", "😅", "😂", "🤣", "😭", "😉",
    "😗", "😙", "😚", "😘", "🥰", "😍", "🤩",
    "🥳", "🫠", "🙃", "🙂", "🥲", "🥹", "😊", "☺️", "😌", "😏",
    "😴", "😪", "🤤", "😋", "😛", "😝", "😜",
    "🤪", "🥴", "😔", "🥺", "😬", "😑", "😐", "😶", "😶‍🌫️", "🫥",
    "🤐", "🫡", "🤔", "🤫", "🫢", "🤭",
    "🥱", "🤗", "🫣", "😱", "🤨", "🧐", "😒", "🙄", "😮‍💨", "😤",
    "😠", "😡", "🤬", "😞", "😓", "😟",
    "😥", "😢", "☹️", "🙁", "🫤", "😕", "😰", "😨", "😧", "😦",
    "😮", "😯", "😲", "😳", "😳", "🤯", "😖",
    "😣", "😩", "😫", "😵", "🥶", "🥵", "🤢", "🤮", "🤧", "🤒", "🤕",
    "😷", "🤥", "😇", "🤠", "🤑", "🤓",
    "😎", "🥸", "🤡", "😈", "👿", "👻", "🎃", "💩", "🤖", "👽", "👾",
    "🌛", "🌜", "🌞", "🔥", "💯", "💫",
    "⭐", "🌟", "💥", "🕳️", "🙈", "💚", "💘", "💝", "💖", "💗", "💓", "💞",
    "💕", "💌", "♥️", "❣️", "❤️‍🩹", "💔", "🦠", "💀", "👁️", "🫦", "👍", "🪂",
    "💐", "🌹", "🌷", "🌸", "🌼", "🍄", "🌵", "🌲", "🪵", "🪨", "⛄", "🌈", "🌊", "🌪️", "🌧️",
    "☁️", "🌍", "🐵", "🦁", "🐯", "🐱", "🐶", "🐺", "🐻", "🐨", "🐼", "🐭", "🐰", "🦊", "🦝",
    "🐮", "🐷", "🦄", "🐢", "🐸", "🐩", "🐐", "🦌", "🦙", "🦥", "🦔",
    "🦇", "🐦", "🐔", "🦉", "🕊️", "🪿", "🐧", "🦈", "🐳", "🐟", "🐙", "🦂", "🕷️", "🐌",
    "🐝", "🍓", "🍒", "🍉", "🍊", "🍍", "🍌", "🍋", "🌶️", "🥑", "🍞", "🧀", "🌭", "🎂",
    "🧁", "🍬", "🧊", "🧃",
    "☕", "🍽️", "⛽", "🛸", "🌇", "🎊", "🎈", "🎁", "🎆", "🥇", "🥈", "🥉", "🏆", "⚽", "🏀",
    "🏈", "🎿", "🎰", "🪄", "🖼️", "🎧", "📟", "💡", "👑", "💎", "📚", "📰", "🔮", "🪤", "⚠️",

];
mt_srand(date('Ymd'));
$lemonN = rand(0, 244);
$url = "https://tenor.googleapis.com/v2/featured?key=".$apikey."&client_key=emoji_kitchen_funbox&q=🍋_".$emojis[$lemonN]."&collection=emoji_kitchen_v6&contentfilter=high";

$data = json_decode(file_get_contents($url), true);

if ($data === false) {
    // Handle error
    die("Error: Unable to fetch data.");
}

// Do something with data
$data= $data["results"][0]["url"];
echo '<img src="'.$data.'" alt="Emoji image">';

