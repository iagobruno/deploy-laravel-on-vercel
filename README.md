# Deploy Laravel on Vercel

Use [vercel/php runtime](https://github.com/vercel-community/php) to run Laravel on Vercel Serverless Functions.

[![Online Demo](https://img.shields.io/badge/Online-Demo-brightgreen.svg)](https://laravel-hello-world.vercel.app/)

## Important files

Copy these files to your project:

- [vercel.json](./vercel.json): Some required configs to run Laravel in serverless function.
- [server.php](./server.php): File that starts the app.
- [.vercelignore](./.vercelignore) (Optional): Sets files and folders that should be ignored from the deployment process.

## Environment variables

The [vercel.json](./vercel.json) file contains some env variables necessary to run Laravel but you can change them, add more or define others in the project settings in Vercel dashboard.

## Build assets

You can run additional commands during the vercel build process by adding them to the "vercel" composer script. [See here](./composer.json#L49).

> [!NOTE]
> By default, vercel/php does not include the built assets. The [server.php](./server.php) file contains an logic to force to do this. [See 7.](https://github.com/vercel-community/php#%EF%B8%8F-faq) in the FAQ section.
