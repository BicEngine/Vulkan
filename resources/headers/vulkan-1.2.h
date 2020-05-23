
#include "./1.2/types.h"
#include "./1.2/functions.h"

#if __vk_version__ >= 1.2
    #define VK_VERSION_1_1 1

    #ifndef VK_NO_PROTOTYPES
        #include "./1.2/prototypes.h"
    #endif
#endif
