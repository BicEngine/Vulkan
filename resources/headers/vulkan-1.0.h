
#include "./1.0/types.h"
#include "./1.0/functions.h"

#if VK_API_VERSION >= VK_MAKE_VERSION(1, 0)
    #define VK_VERSION_1_0 1

    #ifndef VK_NO_PROTOTYPES
        #include "./1.0/prototypes.h"
    #endif
#endif
