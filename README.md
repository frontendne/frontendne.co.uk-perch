# Frontend NE


The site runs on [perch CMS](https://grabaperch.com/) under ```/web/``` and Sass and JavaScript under ```/assets/```.


## Perch

You'll need a valid perch config in ```/web/cms/config/config.php```.


## Assets

You can find the assets under the ```/assets/``` folder. The scripts to compile these are in the ```/gulp``` folder.

There is two npm commands:

```js
// this lints sass/javascript and compiles it all
npm run dev


// this compiles and minifies the assets for production
npm run build

```

These compile to ``/web/cms/addons/feathers/frontendne/``

## Deployment

Only the raw assets need to be checked in - once on master on github the deployment script will run ```npm run build``` on the server and compile the assets.
