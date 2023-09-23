#include<stdio.h>

/**
    appending data in file
*/

void main(){
    FILE *fp = fopen("data4.txt", "a");
    fputs("This is another example of files in c language\n", fp);
    fclose(fp);
}
