export default class Enemy {

    constructor(x, y, imageNumber) {
        this.x = x;
        this.y = y;
        //this is the dimensions of the image
        this.width = 44;
        this.height = 32;

        this.image = new Image()
        //this will use the enemyMap dynamically so that the
        //correct png shows up when called.
        this.image.src = `images/enemy${imageNumber}.png`;
    }

    draw(ctx) {
        ctx.drawImage(this.image, this.x, this.y, this.width, this.height);
    }

    move(xVelocity, yVelocity) {
        this.x += xVelocity;
        this.y += yVelocity;
    }

    collideWith(sprite) {
        if (
            this.x + this.width > sprite.x &&
            this.x < sprite.x + sprite.width &&
            this.y + this.height > sprite.y &&
            this.y < sprite.y + sprite.height
          ) {
            return true;
          } else {
            return false;
          }
    }
}