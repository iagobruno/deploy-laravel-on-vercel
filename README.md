# Deploy Laravel on Vercel

Use [vercel/php runtime](https://github.com/vercel-community/php) to run Laravel on Vercel Serverless Functions.

[![Online Demo](https://img.shields.io/badge/Online-Demo-brightgreen.svg)](https://laravel-on-vercel.vercel.app/)

## Important files

Copy these files to your project:

- [vercel.json](./vercel.json): Some required configs to run Laravel in serverless function.
- [server.php](./server.php): File that starts the app and it routes the assets.
- [.vercelignore](./.vercelignore) (Optional): Sets files and folders that should be ignored from the deployment process.

## Build assets

You can run additional commands during the Vercel build process by adding them to the "vercel" script in [composer.json](./composer.json#L49) file.

If you need a more complex build system, you can use Github Actions to build and use `vercel deploy` cli command. (Don't forget to disable git auto-deployments in the project settings)

> [!NOTE]
> By default, vercel/php does not include the built assets to production source. The [server.php](./server.php) file contains an logic to force to do this.

## Environment variables

The [vercel.json](./vercel.json) file contains some env variables necessary to run Laravel but you can change them, add more or define others in the project settings in Vercel dashboard.
