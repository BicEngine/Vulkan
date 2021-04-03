
#include "./1.1/types.h"
#include "./1.1/functions.h"

#if VK_API_VERSION >= VK_MAKE_VERSION(1, 1)
    #define VK_VERSION_1_1 1

    #ifndef VK_NO_PROTOTYPES
        #include "./1.1/prototypes.h"
    #endif
#endif
