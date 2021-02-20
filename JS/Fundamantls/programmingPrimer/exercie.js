var favoriteBook = [];

function addFavouriteBook(favoriteBook,content){
        favoriteBook.push(content);

}
/// .include to look for a sting incide of string
function printFavouritebook(favoriteBook){
    for(let i=0 ;i<favoriteBook.length;i++){
        console.log('hello: ${favoriteBook[i]}')
    }
}

addFavouriteBook(favoriteBook,"a");
addFavouriteBook(favoriteBook,"b");
addFavouriteBook(favoriteBook,"c");
addFavouriteBook(favoriteBook,"d");

printFavouritebook(favoriteBook);


