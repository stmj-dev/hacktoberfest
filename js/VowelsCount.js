// Return the number (count) of vowels in the given string.
function getCount(str) {
    let count = 0;
    let lower = str.toLowerCase();
    
    for (i = 0; i < lower.length; i++) {
      let vowel = lower[i]
      
      if (vowel === "a" || vowel === "i" || vowel === "u" || vowel === "e" || vowel === "o") {
        count++
      }
    }
      
    return console.log(count);
}

getCount("Testing for vowel");