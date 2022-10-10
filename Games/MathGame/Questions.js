export default class Questions {
    
    //produces random int that cannot be 0
    getRandomInt(max) {
        return Math.floor(Math.random() * (max)) + 1;
    }

    // returns random item from a list
    getRandomItem(arr) {
        const randomIndex = Math.floor(Math.random() * arr.length);
        const item = arr[randomIndex];
        return item;
    }
}