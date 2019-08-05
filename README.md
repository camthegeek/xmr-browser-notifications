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

# Donations
- Bitcoin: `3BucGtx5w4BJhqbxKpiLewdcZoqUuQJQaf`
- Monero: `4And8E2szsxPqR9HE7aFRyFnXsDCgWsXz8ZvbsxpuQkfLXaKDc8bfJdX6zmCQnuuoDMPA5MBSwXGn3Y12habU6dUGiQCkYe`
- Masari: `5nWeLEJdAnL9jvNyBh4uSXMcspbvxy39a97cf2MrUDBDL67mkXiApG5NJAfRK1WUNra8iKQoTHKYxcC52vgjMNpeTizK84J`
- AEON: `WmtLYwVtFoFbB6tKhNrfDoCrZ15iKsWf5Bf8whcJQAPiCMk6U9cjTiRPvDgJYbbhX63LdMZSXhz8748U1GuiXMWP1aggbpNDA`
- Wownero: `Wo4KFjBY4HY7NBBGcVdhYMA5B31KpjVvEFpuTrZXtsjgVhYBhXaJBavCdc31oyRMdw3C6w4BYofGuGFRxBzr9CKf2BoxT5ka2`
