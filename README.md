[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Viber/functions?utm_source=RapidAPIGitHub_ViberFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Viber Package
With Viber’s APIs, you can create unique experiences for users at scale. There are no registration fees and our team is here to support you through the development and integration process.
* Domain: [viber](https://www.viber.com/)
* Credentials: token

## How to get credentials:  
1. The authentication token is generated upon account creation and can be viewed by the account’s admins in the “edit info” screen of their Public Account/ bot or on the Viber Admin Panel.

![](https://developers.viber.com/docs/img/authToken.jpg)
 
## Viber.setWebhook
Webhook will be used for receiving callbacks and user messages from Viber.

| Field     | Type       | Description
|-----------|------------|----------
| token     | Credentials| Your viber token
| url       | String     |  Account webhook URL to receive callbacks & messages from users. Webhook URL must use SSL.
| eventTypes| List       | Indicates the types of Viber events that the account owner would like to be notified about. Don’t include this parameter in your request to get all events

## Viber.deleteAllWebhooks
Cancel webhooks event

| Field| Type       | Description
|------|------------|----------
| token| Credentials| Your viber token

## Viber.sendTextMessage
Send text messages to Viber users who subscribe to the account. 

| Field        | Type       | Description
|--------------|------------|----------
| token        | Credentials| Your viber token
| receiver     | String     | Unique Viber user id
| text         | String     | The text of the message
| senderName   | String     | The sender’s name to display
| senderAvatar | String     | The sender’s avatar URL
| trackingData | String     | Allow the account to track messages and user’s replies. Sent tracking_data value will be passed back with user’s reply
| minApiVersion| String     | Minimal API version required by clients for this message 

## Viber.sendPicture
Send picture messages to Viber users who subscribe to the account. 

| Field        | Type       | Description
|--------------|------------|----------
| token        | Credentials| Your viber token
| receiver     | String     | Unique Viber user id
| text         | String     | Description of the photo.
| media        | String     | URL of the image (JPEG).  Max size 1 MB. Only JPEG format is supported. Other image formats as well as animated GIFs can be sent as URL messages or file messages
| thumbnail    | String     | URL of a reduced size image (JPEG). Max size 100 kb. Recommended: 400x400. Only JPEG format is supported
| senderName   | String     | The sender’s name to display
| senderAvatar | String     | The sender’s avatar URL
| trackingData | String     | Allow the account to track messages and user’s replies. Sent tracking_data value will be passed back with user’s reply
| minApiVersion| String     | Minimal API version required by clients for this message 

## Viber.sendVideo
Send video messages to Viber users who subscribe to the account. 

| Field        | Type       | Description
|--------------|------------|----------
| token        | Credentials| Your viber token
| receiver     | String     | Unique Viber user id
| media        | String     | URL of the video (MP4, H264). Max size 50 MB. Only MP4 and H264 are supported
| size         | Number     | Size of the video in bytes
| duration     | Number     | Video duration in seconds; will be displayed to the receiver. Max 180 seconds
| thumbnail    | String     | URL of a reduced size image (JPEG). Max size 100 kb. Recommended: 400x400. Only JPEG format is supported
| senderName   | String     | The sender’s name to display
| senderAvatar | String     | The sender’s avatar URL
| trackingData | String     | Allow the account to track messages and user’s replies. Sent tracking_data value will be passed back with user’s reply
| minApiVersion| String     | Minimal API version required by clients for this message 

## Viber.sendFile
Send file messages to Viber users who subscribe to the account. 

| Field        | Type       | Description
|--------------|------------|----------
| token        | Credentials| Your viber token
| receiver     | String     | Unique Viber user id
| media        | String     | URL of the file. Max size 50 MB. See forbidden file formats for unsupported file types
| size         | Number     | Size of the file in bytes
| fileName     | String     | Name of the file. File name should include extension. Max 256 characters (including file extension). Sending a file without extension or with the wrong extension might cause the client to be unable to open the file
| senderName   | String     | The sender’s name to display
| senderAvatar | String     | The sender’s avatar URL
| trackingData | String     | Allow the account to track messages and user’s replies. Sent tracking_data value will be passed back with user’s reply
| minApiVersion| String     | Minimal API version required by clients for this message 

## Viber.sendContact
Send contact messages to Viber users who subscribe to the account. 

| Field        | Type       | Description
|--------------|------------|----------
| token        | Credentials| Your viber token
| receiver     | String     | Unique Viber user id
| contactName  | String     | Name of the contact
| contactPhone | String     | Phone number of the contact
| senderName   | String     | The sender’s name to display
| senderAvatar | String     | The sender’s avatar URL
| trackingData | String     | Allow the account to track messages and user’s replies. Sent tracking_data value will be passed back with user’s reply
| minApiVersion| String     | Minimal API version required by clients for this message 

## Viber.sendLocation
Send location messages to Viber users who subscribe to the account. 

| Field        | Type       | Description
|--------------|------------|----------
| token        | Credentials| Your viber token
| receiver     | String     | Unique Viber user id
| coordinates  | Map        | Location coordinates
| senderName   | String     | The sender’s name to display
| senderAvatar | String     | The sender’s avatar URL
| trackingData | String     | Allow the account to track messages and user’s replies. Sent tracking_data value will be passed back with user’s reply
| minApiVersion| String     | Minimal API version required by clients for this message 

## Viber.sendUrl
Send url messages to Viber users who subscribe to the account. 

| Field        | Type       | Description
|--------------|------------|----------
| token        | Credentials| Your viber token
| receiver     | String     | Unique Viber user id
| media        | String     | URL
| senderName   | String     | The sender’s name to display
| senderAvatar | String     | The sender’s avatar URL
| trackingData | String     | Allow the account to track messages and user’s replies. Sent tracking_data value will be passed back with user’s reply
| minApiVersion| String     | Minimal API version required by clients for this message 

## Viber.sendSticker
Send sticker messages to Viber users who subscribe to the account. 

| Field        | Type       | Description
|--------------|------------|----------
| token        | Credentials| Your viber token
| receiver     | String     | Unique Viber user id
| contactName  | String     | Name of the contact
| stickerId    | String     | Unique Viber sticker ID. For examples visit the https://developers.viber.com/docs/tools/sticker-ids page
| senderName   | String     | The sender’s name to display
| senderAvatar | String     | The sender’s avatar URL
| trackingData | String     | Allow the account to track messages and user’s replies. Sent tracking_data value will be passed back with user’s reply
| minApiVersion| String     | Minimal API version required by clients for this message 

## Viber.sendCarouselContentMessage
The Carousel Content Message type allows a user to scroll through a list of items, each composed of an image, description and call to action button.

| Field        | Type       | Description
|--------------|------------|----------
| token        | Credentials| Your viber token
| receiver     | String     | Unique Viber user id
| minApiVersion| String     | Minimal API version required by clients for this message 
| richMedia    | JSON       | Carousel object

## Viber.sendBroadcastMessage
Send messages to multiple Viber users who subscribe to the account. Sending a message to a user will be possible only after the user has subscribed to the Public Account by pressing the subscribe button or by sending a message, or by sending a message to a bot. The ability to send broadcast messages is only opened on application and approval from Viber account managers.

| Field        | Type       | Description
|--------------|------------|----------
| token        | Credentials| Your viber token
| senderName   | String     | The sender’s name to display
| senderAvatar | String     | The sender’s avatar URL
| minApiVersion| String     | Minimal API version required by clients for this message 
| broadcastList| List       | Recipients for the message.
| richMedia    | JSON       | Carousel object

## Viber.getAccountInfo
Fetch the account’s details as registered in Viber. The account admin will be able to edit most of these details from his Viber client.

| Field| Type       | Description
|------|------------|----------
| token| Credentials| Your viber token

## Viber.getUserDetails
Fetch the details of a specific Viber user based on his unique user ID. The user ID can be obtained from the callbacks sent to the account regarding user’s actions. This request can be sent twice during a 12 hours period for each user ID.

| Field| Type       | Description
|------|------------|----------
| token| Credentials| Your viber token
| id   | String     | Unique Viber user id

## Viber.getOnlineStatus
Fetch the online status of a given subscribed account members. The API supports up to 100 user id per request and those users must be subscribed to the account.

| Field| Type       | Description
|------|------------|----------
| token| Credentials| Your viber token
| ids  | List       | Unique Viber user ids

