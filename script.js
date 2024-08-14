// Owner: Sid van Eijndhoven
// Date: 14-augst-2024
// File: script.js

let speech = new SpeechSynthesisUtterance();

let voices = [];

let voiceSelect = document.querySelector("select");

//Haalt de stemmen die al geinstaleerd zijn
window.speechSynthesis.onvoiceschanged = () => {
    voices = window.speechSynthesis.getVoices();
    speech.voice = voices[0];

    voices.forEach((voice, i) => (voiceSelect.options[i] = new Option(voice.name, i)));
};
// zodat je de stem kunt veranderen
voiceSelect/addEventListener("change", () => {
    speech.voice = voices[voiceSelect.value]
})


document.querySelector("button").addEventListener("click" , () => {
    speech.text = document.querySelector("textarea").value;
    window.speechSynthesis.speak(speech)
});