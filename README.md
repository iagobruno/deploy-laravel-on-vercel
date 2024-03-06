# Deploy Laravel app on Vercel

Use [vercel/php runtime](https://github.com/vercel-community/php) to run Laravel on Vercel Serverless Functions.

[![Online Demo](https://img.shields.io/badge/Online-Demo-brightgreen.svg)](https://laravel-hello-world.vercel.app/)

## Important files

Copy these files to your project:

- [vercel.json](./vercel.json): Some required configs to run Laravel in serverless function.
- [bootstrap/index.php](./bootstrap/index.php): File that starts the app.
- [.vercelignore](./.vercelignore) (Optional): Sets files and folders that should be ignored from the deployment process.

## Environment variables

The [vercel.json](./vercel.json) file contains some env variables necessary to run Laravel but you can change them, add more or define others in the project settings in Vercel dashboard.
