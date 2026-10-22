let array = [];

let i;
let j = 1;

for (i = 0; i < 100; i++) {
    if(j % 4 == 0) {
        array[i] = 'Pi';
        j++;
    } else {    
        array[i] = j;
        j++;
    } 
}

for (i = 0; i < 100; i++)
{
    console.log(array[i]);
}
