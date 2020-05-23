
#ifdef __windows__
    #define VKAPI_ATTR __declspec(dllimport)
#endif

#ifndef __windows__
    #define VKAPI_ATTR extern
#endif

#define VKAPI_CALL
#define VKAPI_PTR

#include "vulkan-1.0.h"
#include "vulkan-1.1.h"
#include "vulkan-1.2.h"

#include "vulkan-extensions.h"
