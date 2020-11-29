# PHP Vulkan Bindings

![](https://habrastorage.org/webt/fw/ol/e-/fwole-c3tbdcrcpyrimienh9gha.png)

## Requirements

- PHP >= 7.4
- ext-ffi
- GPU supporting Vulkan API

## Examples

### Creating An Instance

The very first thing you need to do is initialize the Vulkan library by creating an instance. The instance is the
connection between your application and the Vulkan library and creating it involves specifying some details about your
application to the driver.

```php
use Bic\Vulkan\VkResult;
use Bic\Vulkan\VkStructureType;
use Bic\Vulkan\VkApplicationInfo;
use Bic\Vulkan\VkInstance;
use Bic\Vulkan\VkInstanceCreateInfo;
use Bic\Vulkan\Vulkan;

$appInfo = Vulkan::struct(VkApplicationInfo::class, [
    'sType' => VkStructureType::VK_STRUCTURE_TYPE_APPLICATION_INFO,
]);

$createInfo = Vulkan::struct(VkInstanceCreateInfo::class, [
    'sType' => VkStructureType::VK_STRUCTURE_TYPE_INSTANCE_CREATE_INFO,
]);

$instance = Vulkan::struct(VkInstance::class);

if (Vulkan::vkCreateInstance(FFI::addr($createInfo), null, FFI::addr($instance)) !== VkResult::VK_SUCCESS) {
    throw new Exception('Failed to create instance!');
}

// Yay!

Vulkan::vkDestroyInstance($instance, null);
```
