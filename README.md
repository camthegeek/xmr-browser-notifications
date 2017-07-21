# xmr-browser-notifications
## What this does: 
When a block is found on selected pool, you will receive one or more browser based notifications.
## What this does not do:
- Finds blocks for you.
- Monitor multiple pools at once in one tab.

# Initial version
- Not very optimized for customization.
- Works as intended.

# Demonstration(s)
- https://camthegeek.net/xmr/alert/ 
- Only works on pools with API secured by SSL. If your webserver does not enforce SSL, you can test with any pool!
- http://webguru.xyz/xmr/
- Non-http host; all pools work as intended.

# Installation
- Download and extract all files from src/ to /www or /public_html directory on whatever web host you use.
- Navigate browser to where you placed files.
- On page load, accept request for notifications.
- Choose your desired pool from the list.
- Pin tab.
- Wait for notifications.

# Customization
- Previously stated not easily customizable.
- Edit files as needed to change block alert durations, add pools, etc.

# Integration
- Currently testing with popular pool software cryptonote-universal-pool (https://github.com/fancoder/cryptonote-universal-pool)
- Currently testing integration with Slack (http://slack.com). Will have code released soon.

# Usage
Anyone can use. If you make changes, leave me a credit somewhere.

# Credits
- Powered by push.js by Nickersoft (https://github.com/Nickersoft/push.js)
- Super easy to use/integrate browser notifications.

# Appreciation
Send your appreciation in the form of Monero over to
4Ah6e5exEWfNC9fGZV2zga6PGX79M7yX3jYytigs4XHubWfqnoLurHrNwtUp9tVWpdfQ2iZqnEyNA2ckq5iXJthLFvgBcxc